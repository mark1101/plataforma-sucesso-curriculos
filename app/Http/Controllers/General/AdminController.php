<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\CandidatePlan;
use App\Models\CompanyPlan;
use App\Models\Curriculum;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $curriculum = Curriculum::all();
        $curriculum = count($curriculum);
        $candidade = User::where('candidate', 1)->get();
        $candidade = count($candidade);
        $company = User::where('company', 1)->get();
        $company = count($company);

        $plansCandidade = CandidatePlan::all();
        $plansCandidade = count($plansCandidade);
        $plansCompany = CompanyPlan::all();
        $plansCompany = count($plansCompany);

        return view('admin.geral' , [
            'curriculum' => $curriculum,
            'candidate' => $candidade,
            'company' => $company,
            'plansCandidade' => $plansCandidade,
            'plansCompany' => $plansCompany
        ]);
    }
}
