<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CandidateCurriculumController extends Controller
{

    public function create(Request $request, $user_id)
    {
        // cria o curriculo do usuario
    }

    public function getUserCurriculum($user_id)
    {

        $curriculum = Curriculum::where('user_id', $user_id)
            ->first();

        return response()->json(['curriculum' => $curriculum], 200);
    }

    public function editUserCurriculum(Request $request, $user_id)
    {
        // edita o curriculo do usuario
    }

    public function destroyUserCurriculum($curriculum_id)
    {
        Curriculum::where('id', $curriculum_id)->delete();
        return response()->json(['message' => 'Curriculo apagado com sucesso!'], 200);
    }
}
