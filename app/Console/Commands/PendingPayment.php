<?php

namespace App\Console\Commands;

use App\Models\Candidate;
use App\Models\CandidateDueDate;
use App\Models\CandidatePlan;
use App\Models\CandidatePlanRelation;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\CompanyPlan;
use App\Models\CompanyPlanRelation;
use App\Models\Curriculum;
use App\Models\Payments;
use Illuminate\Console\Command;

class PendingPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pending:payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando utilizado para busca de pagamentos pendentes e atualizar seu desempenho';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $payments = Payments::where('status', 'pending')
            ->with('user')
            ->get();

        foreach ($payments as $item) {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/' . $item->payment_id);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            $headers = array();
            $headers[] = 'Authorization: Bearer ' . config('app.mp_acess_token');
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                return 0;
            } else {
                $result = json_decode($result);
            }
            curl_close($ch);
            $status = $result->status;
            if ($status == 'approved') {
                if ($item->user->company) {
                    $plan = CompanyPlan::where('name', $result->additional_info->items[0]->title)->first();
                    $plan = $plan->id;

                    $company = Company::where('user_id', $item->user_id)->first();
                    $companyPlan = CompanyPlanRelation::where('company_id', $company->id)
                        ->with(['plan'])
                        ->first();

                    $planRequest = CompanyPlan::where('id', $plan)->first();
                    $credit = CompanyCurriculumQuantity::where('company_id', $company->id)->first();
                    $sum = $planRequest->quantity + $credit->quantity;

                    if ($planRequest->type != $companyPlan->plan->type) {
                        if ($credit->quantity != 0) {
                            return 1;
                        }
                    }

                    $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
                        'plan_id' => $plan
                    ]);

                    if ($alterPlan) {
                        if ($this->addCredit($company->id, $sum)) {
                            Payments::create([
                                'payment_id' => $item->payment_id,
                                'user_id' => $item->user_id,
                                'product' => $plan->name,
                                'type' => 0,
                                'price' => $plan->price,
                                'status' => 'approved',
                            ]);
                            return 1;
                        } else {
                            $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
                                'plan_id' => $companyPlan->plan_id
                            ]);
                            return 0;
                        }
                    } else {
                        return 0;
                    }
                } else {
                    $plan = CandidatePlan::where('name', $result->additional_info->items[0]->title)->first();
                    $plan_id = $plan->id;

                    $candidate = Candidate::where('user_id', $item->user_id)->first();
                    $planRequest = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();

                    if ($planRequest == null) {
                        $createPlan = CandidatePlanRelation::create([
                            'candidate_id' => $candidate->id,
                            'plan_id' => (int) $plan->id
                        ]);
                        if ($createPlan) {
                            $planNew = CandidatePlan::where('id', $plan_id)->first();
                            $today = date('Y-m-d');
                            $sumData = date('Y-m-d', strtotime($today . "+ {$planNew->days} days"));
                            if ($this->alterDueDate($today, $candidate)) {
                                Curriculum::where('user_id', $item->user_id)->update(['active' => 1]);
                                Payments::create([
                                    'payment_id' => $item->payment_id,
                                    'user_id' => $item->user_id,
                                    'product' => $plan->name,
                                    'type' => 0,
                                    'price' => $plan->price,
                                    'status' => 'approved',
                                ]);
                                return 1;

                            } else {
                                CandidatePlanRelation::where('candidate_id', $candidate->id)->delete();
                                return 0;
                            }
                        }
                    }

                    $candidate = Candidate::where('user_id', $item->user_id)
                        ->with('dueDate')
                        ->first();
                    $planCandidate = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();
                    $planCandidadeEdit = CandidatePlan::where('id', $plan_id)->first();

                    $days = strval($planCandidadeEdit->days);

                    $dateContrated = $candidate->dueDate->due_date;
                    $sumData = date('Y-m-d', strtotime($dateContrated . " + {$days} days"));

                    $alterPlan = CandidatePlanRelation::where('candidate_id', $candidate->id)->update([
                        'plan_id' => $plan_id
                    ]);

                    if ($alterPlan) {
                        if ($this->alterDueDate($sumData, $candidate)) {
                            Curriculum::where('user_id', 4)->update(['active' => 1]);
                            Payments::create([
                                'payment_id' => $item->payment_id,
                                'user_id' => $item->user_id,
                                'product' => $plan->name,
                                'type' => 0,
                                'price' => $plan->price,
                                'status' => 'approved',
                            ]);
                            return 1;
                        } else {
                            $alterPlan = CandidatePlanRelation::where('candidate_id', $candidate->id)->update([
                                'plan_id' => $planCandidate->plan_id
                            ]);

                            return 0;
                        }
                    } else {
                        return 0;
                    }
                }
            }
        }
        return 0;
    }

    public function addCredit($companyId, $sum)
    {
        $addCredit = CompanyCurriculumQuantity::where('company_id', $companyId)->update([
            'quantity' => $sum
        ]);
        if ($addCredit) {
            return true;
        } else {
            return false;
        }
    }

    public function alterDueDate($sumData, $candidate)
    {
        $date = CandidateDueDate::where('user_id', $candidate->user_id)->first();
        if ($date) {
            $alterDueDate = CandidateDueDate::where('user_id', $candidate->user_id)->update([
                'due_date' => $sumData
            ]);
        } else {
            $alterDueDate = CandidateDueDate::create([
                'user_id' => $candidate->user_id,
                'due_date' => $sumData
            ]);
        }

        if ($alterDueDate) {
            return true;
        } else {
            return false;
        }
    }
}
