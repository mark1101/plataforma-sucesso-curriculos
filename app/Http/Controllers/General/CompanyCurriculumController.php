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

    public function createDownloadCurriculum($curriculum_id){

        

    }
}
