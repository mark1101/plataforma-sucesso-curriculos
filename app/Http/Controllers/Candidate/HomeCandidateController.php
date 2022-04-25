<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateDueDate;
use App\Models\CandidatePlan;
use App\Models\CandidatePlanRelation;
use App\Models\Curriculum;
use App\Models\CurriculumBlock;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $blocked = CurriculumBlock::where('curriculum_id' , $curriculumUser->id)
        ->select('cnpj')->first();

        if($blocked != null){
            $blocked = $blocked->cnpj;
        }

        $expiration = "";
        if ($candidateDueDate) {
            $hoje = date('d/m/Y');

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



        return view('Applicant.dashboard', [
            'name' => $userName,
            'curriculum' => $curriculumUser,
            'expiration' => $expiration,
            'blocked' => $blocked
        ]);
    }
    public function index()
    {
        return view('Applicant.create-account');
        // return view de cadastro do candidado
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

        $plan = CandidatePlan::where('id', $plan_id)->first();

        if (!$plan) {
            $createPlan = CandidatePlan::create([
                'user_id' => Auth::user()->id,
                'plan_id' => $plan_id
            ]);
            if ($createPlan) {
                $planNew = CandidatePlan::where('id', $plan_id)->first();
                $today = date('Y-m-d');
                $sumData = date('Y-m-d', strtotime($today . " + {$planNew->days} days"));
                if ($this->alterDueDate($sumData)) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Seu plano iniciado com sucesso!'
                    ]);
                }else{
                    CandidatePlan::where('user_id' , Auth::user()->id)->delete();
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Erro ao adicionar plano, tente novamente mais tarde ou contate-nos pelo email'
                    ]);
                }
                
            }
        }
        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        $planCandidate = CandidatePlanRelation::where('candidate_id', $candidate->id)->first();

        //adicionar metodo de pagamento

        $days = strval($plan->days);
        $today = date('Y-m-d');
        $sumData = date('Y-m-d', strtotime($today . " + {$days} days"));

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
        $alterDueDate = CandidateDueDate::where('user_id', $candidate->user_id)->update([
            'due_date' => $sumData
        ]);
        if($alterDueDate){
            return true;
        }else{
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

        $newCandidate = Candidate::create([
            'user_id' => $newUser['id'],
            'name' => $newUser['name'],
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
}
