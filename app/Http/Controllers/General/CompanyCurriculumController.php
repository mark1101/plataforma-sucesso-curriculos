<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\CurriculumCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyCurriculumController extends Controller
{
    public function getListCurriculum()
    {
        $curriculum = Curriculum::where('active', 1)->get();

        return response()->json(['curriculums' => $curriculum], 200);
    }

    public function getDownloadCurriculum()
    {

        $curriculum = CurriculumCompany::where('company_id', Auth::user()->id)
            ->with(['company'])
            ->get();

        return response()->json(['curriculums' => $curriculum], 200);
    }

    public function createDownloadCurriculum($curriculum_id)
    {
    }

    public function indexSearch(Request $request)
    {
        $curriculum = Curriculum::where('hiring_type', $request->hiring)
            ->orWhere('schooling_level', $request->schooling)
            ->orWhere('formation', $request->formation)
            ->join('professional_experiences', 'curriculum.id', '=', 'professional_experiences.curriculum_id')
            ->orWhere('professional_experiences.years', '>=', $request->years)
            ->get();

        return redirect()->route('primary-filter', [
            'curriculum' => $curriculum
        ]);
    }
}
