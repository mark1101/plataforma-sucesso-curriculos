<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentsCompanyResource;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\CompanyPlan;
use App\Models\CompanyPlanRelation;
use App\Models\Curriculum;
use App\Models\CurriculumCompany;
use App\Models\NfsControl;
use App\Models\Payments;
use App\Models\User;
use CreateCompanyCurriculumQuantityesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeCompanyController extends Controller
{
    public function enter()
    {
        return view('Company.login-company');
    }

    public function search()
    {
        return view('Search.search');
    }
    public function acess()
    {
        return view('Search.my-curriculum');
    }
    public function result()
    {
        return view('Search.search-result');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();
        $curriculumDownload = CurriculumCompany::where('company_id', $company->id)->count();
        $plano = CompanyPlanRelation::where('company_id', $company->id)->first();

        $plan = CompanyCurriculumQuantity::where('company_id', $company->id)->first();
        $pending = Payments::where('user_id', Auth::id())
        ->where('status', 'pending')->exists();

        return view('Company.dashboard', [
            'name' => $company->name,
            'cnpj' => $company->name,
            'status' => $company->status,
            'address' => $company->address,
            'credit' => $plan->quantity,
            'curriculum' => $curriculumDownload,
            'plan' => $plano->plan,
            'payment' => $pending
        ]);
    }

    public function getData()
    {
        $company = Company::where('user_id', Auth::user()->id)->first();
        $companyPlan = CompanyPlanRelation::where('company_id', $company->id)->first();
        $plan = CompanyPlan::where('id', $companyPlan->plan_id)->first();

        return response()->json([
            'company' => $company,
            'companyPlan' => $companyPlan,
            'plan' => $plan
        ]);
    }

    public function alterPlan($plan)
    {


        $company = Company::where('user_id', Auth::user()->id)->first();
        $companyPlan = CompanyPlanRelation::where('company_id', $company->id)
            ->with(['plan'])
            ->first();
        $planRequest = CompanyPlan::where('id', $plan)->first();
        if ($companyPlan == null) {
            $companyPlan = CompanyPlanRelation::create(['plan_id' => $plan, 'company_id' => $company->id]);
        }

        $planRequest = CompanyCurriculumQuantity::create(['company_id' => $planRequest, 'quantity' => $planRequest->quantity]);

        $credit = CompanyCurriculumQuantity::where('company_id', $company->id)->first();

        $sum = $planRequest->quantity + $credit->quantity;

        if ($planRequest->type != $companyPlan->plan->type) {
            if ($credit->quantity != 0) {
                return response()->json([
                    'message' => 'Os planos possuem tipos diferentes de qualificações,
                    você precisa gastar seus créditos atuais para alterar o plano!',
                    'status' => 'error'
                ], 201);
            }
        }

        $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
            'plan_id' => $plan
        ]);

        if ($alterPlan) {
            if ($this->addCredit($company->id, $sum)) {
                return response()->json([
                    'message' => 'Seu pagamento foi aprovado, plano alterado e crédito adicionado a sua conta!',
                    'status' => 'success'
                ], 201);
            } else {
                $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
                    'plan_id' => $companyPlan->plan_id
                ]);
                return response()->json([
                    'message' => 'Erro ao concluir sua requisição, tente novamente mais tarde!',
                    'status' => 'success'
                ], 201);
            }
        } else {
            return response()->json([
                'message' => 'Erro ao validar seu pagamento',
                'status' => 'error'
            ], 201);
        }
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

    public function index()
    {
        return view('Company.create-account');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $plan = CompanyPlan::where('type', 1)->first();

        $newUser =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'company' => 1,

        ]);

        $newCompany = Company::create([
            'user_id' => $newUser['id'],
            'name' => $data['name'],
            'cnpj' => $data['cnpj'],
            'address' => $data['address']
        ]);

        CompanyCurriculumQuantity::create([
            'company_id' => $newCompany['id'],
            'quantity' => $plan->quantity
        ]);

        $plan = CompanyPlan::where('type', 1)->first();
        CompanyPlanRelation::create([
            'company_id' => $newCompany['id'],
            'plan_id' => $plan->id
        ]);

        if ($newCompany) {
            return view('Company.login-company');
        } else {
            return view('home-plataform');
        }
    }

    public function edit(Request $request, $user_id)
    {
        $data = $request->all();
    }

    public function destroy($user_id)
    {
    }

    public function plansCompany()
    {

        $plans = CompanyPlan::all();
        return view('Company.plans', [
            'plans' => $plans
        ]);
    }

    public function payments()
    {
        $payments = Payments::where('user_id', Auth::id())->get();
        $payments->map(function ($payments) {
            $payments->nfs = $this->getPayments($payments->id);
        });

        return view('Company.payments', [
            'payments' => $payments,
            'error' => null
        ]);
    }

    public function getPayments($payment_id)
    {
        $nfs = NfsControl::where('payment_id', $payment_id)->get();
        return $nfs;
    }
}
