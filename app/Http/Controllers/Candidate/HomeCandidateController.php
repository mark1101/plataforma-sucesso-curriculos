<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateDueDate;
use App\Models\CandidatePlan;
use App\Models\CandidatePlanRelation;
use App\Models\Curriculum;
use App\Models\CurriculumBlock;
use App\Models\Payments;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MercadoPago\Plan;

class HomeCandidateController extends Controller
{
    public function enter()
    {
        return view('Applicant.login-applicant');
    }
    public function dashboard()
    {
        $userName = Auth::user()->name;
        $curriculumUser = Curriculum::where('user_id', Auth::user()->id)->first();
        $candidateDueDate = CandidateDueDate::where('user_id', Auth::user()->id)->first();
        if ($curriculumUser) {
            $blocked = CurriculumBlock::where('curriculum_id', $curriculumUser->id)
                ->select('cnpj')->first();
        } else {
            $blocked = null;
        }

        if ($blocked != null) {
            $blocked = $blocked->cnpj;
        }

        $expiration = "";
        if ($candidateDueDate) {
            $hoje = date('Y-m-d');

            if ($candidateDueDate->due_date < $hoje) {
                $expiration = 'Seu currículo está inativo';
            } else {
                $data1 = new DateTime($candidateDueDate->due_date);
                if ($curriculumUser) {
                    if ($curriculumUser->active == 0) {
                        $expiration = 'Seu currículo está inativo';
                    } else {
                        $expiration = date_format($data1, 'd/m/Y');
                    }
                } else {
                    $expiration = date_format($data1, 'd/m/Y');
                }
            }
        }

        $candidate = Candidate::where('user_id' , Auth::id())->first();
        if (CandidatePlanRelation::where('candidate_id', $candidate->id)->exists()) {
            $plan_relation = CandidatePlanRelation::where('candidate_id', $candidate->id)
            ->with('plan')
            ->first();
            $plan = $plan_relation->plan->name;
        } else {
            $plan = null;
        }

        return view('Applicant.dashboard', [
            'name' => $userName,
            'curriculum' => $curriculumUser,
            'expiration' => $expiration,
            'blocked' => $blocked,
            'plano' => $plan
        ]);
    }
    public function index()
    {
        return view('Applicant.create-account');
    }

    public function getData()
    {

        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        $candidatePlan =  CandidatePlanRelation::where('candidate_id', $candidate->id)->first();
        $plan = CandidatePlan::where('id', $candidatePlan->plan_id)->first();

        return response()->json([
            'candidade' => $candidate,
            'candidatePlan' => $candidatePlan,
            'plan' => $plan
        ]);
    }

    public function alterPlan($plan_id)
    {

        $plan = null;
        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        $plan = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();

        if ($plan == null) {
            $createPlan = CandidatePlanRelation::create([
                'candidate_id' => $candidate->id,
                'plan_id' => (int) $plan_id
            ]);
            if ($createPlan) {
                $planNew = CandidatePlan::where('id', $plan_id)->first();
                $today = date('Y-m-d');
                $sumData = date('Y-m-d', strtotime($today . "+ {$planNew->days} days"));
                if ($this->alterDueDate($today)) {
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

        // Funcoes que irao rodar caso o cliente já estiver em um plano

        $candidate = Candidate::where('user_id', Auth::user()->id)
            ->with('dueDate')
            ->first();
        $planCandidate = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();
        $planCandidadeEdit = CandidatePlan::where('id', $plan_id)->first();

        //adicionar metodo de pagamento

        $days = strval($planCandidadeEdit->days);
        $dateContrated = $candidate->dueDate->due_date;
        $sumData = date('Y-m-d', strtotime($dateContrated . " + {$days} days"));

        $alterPlan = CandidatePlanRelation::where('candidate_id', $candidate->id)->update([
            'plan_id' => $plan_id
        ]);

        if ($alterPlan) {
            if ($this->alterDueDate($sumData)) {
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
    }

    public function alterDueDate($sumData)
    {
        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        $date = CandidateDueDate::where('user_id', Auth::user()->id)->first();
        if ($date) {
            $alterDueDate = CandidateDueDate::where('user_id', $candidate->user_id)->update([
                'due_date' => $sumData
            ]);
        } else {
            $alterDueDate = CandidateDueDate::create([
                'user_id' => Auth::user()->id,
                'due_date' => $sumData
            ]);
        }

        if ($alterDueDate) {
            return true;
        } else {
            return false;
        }
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'candidate' => 1,
        ]);

        $createDate = new DateTime();

        $newCandidate = Candidate::create([
            'user_id' => $newUser->id,
            'name' => $newUser->name
        ]);


        $today = date('Y-m-d');
        CandidateDueDate::create([
            'due_date' => $today,
            'user_id' => $newUser['id']
        ]);

        if ($newCandidate) {
            return view('Applicant.login-applicant');
        }
    }


    public function edit(Request $request, $user_id)
    {
        // edita o candidato
    }

    public function destroy($user_id)
    {
        // deleta o candidato
    }

    public function payments()
    {
        $payments = Payments::where('user_id', Auth::id());
        return view('Applicant.payments', [
            'payments' => $payments->get()
        ]);
    }
}
