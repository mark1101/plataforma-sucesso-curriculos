<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\CompanyPlan;
use App\Models\CompanyPlanRelation;
use App\Models\Curriculum;
use App\Models\CurriculumCompany;
use App\Models\User;
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

        $plan = CompanyCurriculumQuantity::where('company_id', $company->id)->first();

        return view('Company.dashboard', [
            'name' => $company->name,
            'cnpj' => $company->name,
            'status' => $company->status,
            'address' => $company->address,
            'credit' => $plan->quantity,
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
        $credit = CompanyCurriculumQuantity::where('company_id', $company->id)->first();
        $sum = $planRequest->quantity + $credit->quantity;

        if ($planRequest->type != $companyPlan->plan->type) {
            if ($credit->quantity != 0) {
                return response()->json([
                    'message' => 'Os planos possuem tipos diferentes de qualificações,
                    você precisa gastar seus planos atuais para alterar o plano!',
                    'status' => 'error'
                ], 201);
            }
        }

        $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
            'plan_id' => $plan
        ]);

        $addCredit = CompanyCurriculumQuantity::where('company_id', $company->id)->update([
            'quantity' => $sum
        ]);

        if ($alterPlan && $addCredit) {
            return response()->json([
                'message' => 'Pagamento realizado com sucesso!',
                'status' => 'success'
            ], 201);
        } else {
            return response()->json([
                'message' => 'Erro ao validar seu pagamento',
                'status' => 'error'
            ], 201);
        }
    }

    public function index()
    {
        return view('Company.create-account');
        // return view de cadastro da empresa
    }

    public function create(Request $request)
    {
        $data = $request->all();

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
}
