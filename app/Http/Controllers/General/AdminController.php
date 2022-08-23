<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Candidate;
use App\Models\CandidatePlan;
use App\Models\Company;
use App\Models\CompanyPlan;
use App\Models\Curriculum;
use App\Models\CurriculumCompany;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $curriculum = Curriculum::all();
        $curriculumC = count($curriculum);
        $candidade = User::where('candidate', 1)->get();
        $candidadeC = count($candidade);
        $company = User::where('company', 1)->get();
        $companyC = count($company);

        $plansCandidade = CandidatePlan::all();
        $plansCandidadeC = count($plansCandidade);
        $plansCompany = CompanyPlan::all();
        $plansCompanyC = count($plansCompany);

        $tableCompany = CompanyResource::collection(Company::with('quantity')->get());
        $tableCandidate = Candidate::with('curriculum', 'planCandidate', 'planCandidate.plan', 'user')->get();

        dd(json_encode($tableCompany));

        return view('Admin.geral', [
            'curriculum' => $curriculumC,
            'candidate' => $candidadeC,
            'company' => $companyC,
            'plansCandidade' => $plansCandidadeC,
            'plansCompany' => $plansCompanyC,

            'tableCompany' => $tableCompany,
            'tableCandidate' => $tableCandidate
        ]);
    }

    public function sumCurriculum($company)
    {
        return CurriculumCompany::where('company_id', $company)->get();
    }
}
