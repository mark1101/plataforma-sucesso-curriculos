<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateCurriculumController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();

        $imageName =  null;

        dd($data['experiences'], $data['courses']);

        if($request->file == []){
            $newCurriculum = Curriculum::create([
                'user_id' => Auth::user()->id,
                'name' => $data['name'],
                'address' => $data['address'],
                'cep'=> $data['cep'],
                'state' => $data['state'],
                'city' => $data['city'],
                'age'=> $data['age'],
                'phone' => $data['phone'],
                'whatsapp' => $data['whatsapp'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'schooling_level' => $data['schooling_level'],
                'formation' => $data['formation'],
                'institution' => $data['institution'],
                'hiring_type' => $data['hiring_type'],
                'desired_function' => $data['desired_function'],
                'desired_salary' => $data['desired_salary'],
                'is_handicapped' => $data['is_handicapped'],
                'cnh' => $data['cnh'],
                'additional_considerations' => $data['additional_considerations'],
                'curriculum_photo_url' => $imageName,
                'is_employes' => $data['is_employed'],
                'found_us' => $data['found_us'] 
            ]);

            return;
        }

        $imageName = bin2hex(random_bytes(10)) . time() . '.' . $data['file']->extension();
        $data['file']->move(public_path('images/feed/'), $imageName);

        $newCurriculum = Curriculum::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'cep'=> $data['cep'],
            'state' => $data['state'],
            'city' => $data['city'],
            'age'=> $data['age'],
            'phone' => $data['phone'],
            'whatsapp' => $data['whatsapp'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'schooling_level' => $data['schooling_level'],
            'formation' => $data['formation'],
            'institution' => $data['institution'],
            'hiring_type' => $data['hiring_type'],
            'desired_function' => $data['desired_funcion'],
            'desired_salary' => $data['desired_salary'],
            'is_handicapped' => $data['is_handicapped'],
            'cnh' => $data['cnh'],
            'additional_considerations' => $data['additional_considerations'],
            'curriculum_photo_url' => $imageName,
            'is_employes' => $data['is_employed'],
            'found_us' => $data['found_us'] 
        ]);

        return $newCurriculum;
        
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
