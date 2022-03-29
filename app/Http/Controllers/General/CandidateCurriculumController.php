<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\ProfessionalExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateCurriculumController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();
        $imageName =  null;


        if ($request->file == []) {
            $newCurriculum = Curriculum::updateOrCreate([
                'user_id' => Auth::user()->id,
                'name' => $data['name'],
                'address' => $data['address'],
                'cep' => $data['cep'],
                'state' => $data['state'],
                'city' => $data['city'],
                'age' => $data['age'],
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
                'is_employed' => $data['is_employed'],
                'found_us' => $data['found_us']
            ]);

            foreach ($data['experiences'] as $experience) {
                ProfessionalExperience::updateOrCreate([
                    'curriculum_id' => $newCurriculum["id"],
                    'name_company' => $experience["name_company"],
                    'company_field' => $experience["company_field"],
                    'occupied_job' => $experience["occupied_job"],
                    'years' => $experience["years"],
                    'months' => $experience["months"]
                ]);
            }

            foreach ($data['courses'] as $course) {
                Course::updateOrCreate([
                    'curriculum_id' => $newCurriculum["id"],
                    'name_courses' => $course["name_courses"],
                    'school' => $course["school"],
                    'hours' => $course["hours"]
                ]);
            }

            return $newCurriculum;
        }

        $imageName = bin2hex(random_bytes(10)) . time() . '.' . $data['file']->extension();
        $data['file']->move(public_path('images/feed/'), $imageName);

        $newCurriculum = Curriculum::updateOrCreate([
            'name' => $data['name'],
            'address' => $data['address'],
            'cep' => $data['cep'],
            'state' => $data['state'],
            'city' => $data['city'],
            'age' => $data['age'],
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
            'is_employed' => $data['is_employed'],
            'found_us' => $data['found_us']
        ]);

        foreach ($data['experiences'] as $experience) {
            ProfessionalExperience::updateOrCreate([
                'curriculum_id' => $newCurriculum['id'],
                'name_company' => $experience->name_company,
                'company_field' => $experience->company_field,
                'occuppied_job' => $experience->occupied_job,
                'years' => $experience->years,
                'months' => $experience->months
            ]);
        }

        foreach ($data['courses'] as $course) {
            Course::updateOrCreate([
                'name_courses' => $course->name_courses,
                'school' => $course->school,
                'hours' => $course->hours
            ]);
        }

        return $newCurriculum;
    }

    public function getUserCurriculum()
    {
        $curriculum = Curriculum::where('user_id', Auth::user()->id)
            ->first();

        $experiences = ProfessionalExperience::where('curriculum_id', $curriculum->id)
            ->get();

        $courses = Course::where('curriculum_id', $curriculum->id)
            ->get();

        return response()->json([
            'curriculum' => $curriculum,
            'experiences' => $experiences,
            'courses' => $courses,
        ], 200);
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
