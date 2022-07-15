<?php

namespace App\Http\Controllers\MercadoPago;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateDueDate;
use App\Models\CandidatePlan;
use App\Models\CandidatePlanRelation;
use App\Models\Curriculum;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class CandidadePaymentController extends Controller
{
    public function returnCart($plan_id)
    {
        $plan = CandidatePlan::where('id', $plan_id)->first();
        $candidate = Candidate::where('user_id', Auth::id())->first();
        $planRelation = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();

        if ($planRelation) {
            if ($plan->id != $planRelation->plan_id) {
                return view('Applicant.cart', [
                    'plan' => $plan
                ]);
            } else {
                return view('Applicant.error-plan-on');
            }
        } else {
            return view('Applicant.cart', [
                'plan' => $plan
            ]);
        }
    }

    public function pay(Request $request)
    {
        //http://127.0.0.1:8000/payment/success/candidade
        //{"payment_id": "23951350354"}

        $payment_id = $request->get('payment_id');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/' . $payment_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Authorization: Bearer APP_USR-8029478245666882-071110-39788d2e54fe7884ba7744e6cbaf7523-1150003921';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $result = json_decode($result);
        }
        curl_close($ch);
        
        $status = $result->status;
        if (!$status == 'approved') {
            $plan = CandidatePlan::where('name', $result->additional_info->items[0]->title)->first();
            $plan_id = $plan->id;

            $candidate = Candidate::where('user_id', 4)->first(); //Auth::id()
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
                        Curriculum::where('user_id', 4)->update(['active' => 1]);
                        Payments::create([
                            'payment_id' => $payment_id,
                            'user_id' => 4, //Auth::id();
                            'product' => $plan->name,
                            'type' => 0,
                            'price' => $plan->price,
                            'status' => 'approved',
                        ]);
                        return response()->json([
                            'status' => 'success',
                            'message' => 'Seu plano iniciado com sucesso!'
                        ]);
                    } else {
                        CandidatePlanRelation::where('candidate_id', $candidate->id)->delete();
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Erro ao adicionar plano, tente novamente mais tarde ou contate-nos pelo email'
                        ]);
                    }
                }
            }

            $candidate = Candidate::where('user_id', 4) //Auth::id()
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
                        'payment_id' => $payment_id,
                        'user_id' => 4, //Auth::id();
                        'product' => $plan->name,
                        'type' => 0,
                        'price' => $plan->price,
                        'status' => 'approved',
                    ]);
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Seu plano foi alterado com sucesso!'
                    ]);
                } else {
                    $alterPlan = CandidatePlanRelation::where('candidate_id', $candidate->id)->update([
                        'plan_id' => $planCandidate->plan_id
                    ]);

                    return response()->json([
                        'status' => 'error',
                        'message' => 'Erro ao concluir sua requisição, tente novamente mais tarde!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Erro ao alterar o plano, tente novamente mais tarde!'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Algo de errado aconteceu, tente novamente mais tardeeeee!'
            ]);
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
