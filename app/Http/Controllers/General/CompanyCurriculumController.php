<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurriculumListResource;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\CompanyPlanRelation;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\CurriculumCompany;
use App\Models\ProfessionalExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class CompanyCurriculumController extends Controller
{
    public function getListCurriculum()
    {
        $curriculum = Curriculum::where('active', 1)->get();

        return response()->json(['curriculums' => $curriculum], 200);
    }

    public function listCurriculum()
    {
        $user = Auth::user();

        $companyId = Company::where('user_id', Auth::user()->id)->first();

        $curricumDownload = CurriculumCompany::where('company_id', $companyId->id)
            ->get();

        $curriculumId = [];
        foreach ($curricumDownload as $item) {
            $curriculumId[] = $item['curriculum_id'];
        }

        $companyPlan = CompanyPlanRelation::where('id', $companyId->id)
            ->with('plan')
            ->first();

        $quantityCurriculum = CompanyCurriculumQuantity::where('company_id', $companyId->id)
            ->first();

        $curriExpe = Curriculum::join('professional_experiences', 'curriculum.id', '=', 'professional_experiences.curriculum_id')
            ->get();

        $cnot = [];
        foreach ($curriExpe as $value) {
            $cnot[] = $value['curriculum_id'];
        }
        if ($companyPlan->plan->type == 2) {
            $curriculum = CurriculumListResource::collection(Curriculum::whereNotIn('id', $curriculumId)
                ->whereIn('id', $cnot)
                ->where('active' , 1)
                ->get());
        } else {
            $curriculum = CurriculumListResource::collection(Curriculum::whereNotIn('id', $cnot)
                ->whereNotIn('id', $curriculumId)
                ->where('active' , 1)
                ->get());
        }

        $curriculumMe = CurriculumListResource::collection(Curriculum::whereIn('id', $curriculumId)
            ->get());

        return response()->json([
            'user' => $user,
            'curriculumList' => $curriculum,
            'curriculumMe' => $curriculumMe,
            'quantity' => $quantityCurriculum->quantity
        ]);
    }

    public function purchaseCurriculum(Request $request)
    {
        $data = $request->all();
        $company = Company::where('user_id', Auth::user()->id)->first();

        $calc = CompanyCurriculumQuantity::where('company_id', $company->id)->first();

        $sub = $calc->quantity - count($data);

        CompanyCurriculumQuantity::where('company_id', $company->id)->update([
            'quantity' => $sub,
        ]);

        foreach ($data as $item) {
            CurriculumCompany::create([
                'curriculum_id' => $item["id"],
                'company_id' => $company->id
            ]);
        }
        return;
    }

    public function getDownloadCurriculum($curriculumId)
    {

        $data = Curriculum::where('id', $curriculumId)->first();
        $experiences = ProfessionalExperience::where('curriculum_id', $data->id)->get();
        $courses = Course::where('curriculum_id', $data->id)->get();

        $path = public_path() . '/pdf/curriculo.pdf';

        $pdf = PDF::loadView('Company.myPdf', compact('data', 'experiences', 'courses'));
        $pdf->save($path);
        return $pdf->download($path);
    }

    public function indexSearch(Request $request)
    {
        $curriculum = Curriculum::where('hiring_type', $request->hiring)
            ->orWhere('schooling_level', $request->schooling)
            ->orWhere('formation', $request->formation)
            ->join('professional_experiences', 'curriculum.id', '=', 'professional_experiences.curriculum_id')
            ->orWhere('professional_experiences.years', '>=', $request->years)
            ->get();

        return;
    }
}
