<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\CurriculumBlock;
use App\Models\ProfessionalExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Object_;

class CandidateCurriculumController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();
        $imageName =  null;

        if ($data['file'] == '[object Object]') {
            $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();
            if ($curriculum) {
                $newCurriculum = Curriculum::where('user_id', Auth::user()->id)->update([
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
            } else {
                $newCurriculum = Curriculum::create([
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
            }
            $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();

            if ($data['experiences'] != null) {
                foreach (json_decode($data['experiences']) as $experience) {
                    ProfessionalExperience::updateOrCreate([
                        'curriculum_id' => $curriculum->id,
                        'name_company' => $experience->name_company,
                        'company_field' => $experience->company_field,
                        'occupied_job' => $experience->occupied_job,
                        'years' => $experience->years,
                        'months' => $experience->months
                    ]);
                }
            }
            if ($data['courses'] != null) {
                foreach (json_decode($data['courses']) as $course) {
                    Course::updateOrCreate([
                        'curriculum_id' => $curriculum->id,
                        'name_courses' => $course->name_courses,
                        'school' => $course->school,
                        'hours' => $course->hours
                    ]);
                }
            }

            if ($data['cnpj'] != null) {
                CurriculumBlock::create([
                    'curriculum_id' => $curriculum->id,
                    'cnpj' => $request->cnpj,
                ]);
            }

            return ['redirect' => route('candidatedash')];
        }

        $imageName = bin2hex(random_bytes(10)) . time() . '.' . $data['file']->extension();
        $data['file']->move(public_path('images/feed/'), $imageName);

        $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();
        if ($curriculum) {
            $newCurriculum = Curriculum::where('user_id', Auth::user()->id)->update([
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
        } else {
            $newCurriculum = Curriculum::create([
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
        }
        $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();

        if ($data['experiences'] != []) {
            foreach (json_decode($data['experiences']) as $experience) {
                ProfessionalExperience::updateOrCreate([
                    'curriculum_id' => $curriculum->id,
                    'name_company' => $experience->name_company,
                    'company_field' => $experience->company_field,
                    'occupied_job' => $experience->occupied_job,
                    'years' => $experience->years,
                    'months' => $experience->months
                ]);
            }
        }
        if ($data['courses'] != null) {
            foreach (json_decode($data['courses']) as $course) {
                Course::updateOrCreate([
                    'curriculum_id' => $curriculum->id,
                    'name_courses' => $course->name_courses,
                    'school' => $course->school,
                    'hours' => $course->hours
                ]);
            }
        }

        if ($data['cnpj'] != null) {
            CurriculumBlock::create([
                'curriculum_id' => $curriculum->id,
                'cnpj' => $request->cnpj,
            ]);
        }

        return ['redirect' => route('candidatedash')];
    }

    public function addImage(Request $request)
    {
        $data = $request->all();
        if ($request->file != '[Object Object]') {
            $imageName = bin2hex(random_bytes(10)) . time() . '.' . $data['file']->extension();
            $data['file']->move(public_path('images/feed/'), $imageName);

            $curriculum = Curriculum::where('user_id', Auth::user()->id)->update(
                [
                    'curriculum_photo_url' => $imageName
                ]
            );
        }

        if ($curriculum) {
            return response()->json(['status' => 'success', 'message' => 'Imagem adicionada com sucesos!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Erro ao adicionar imagem']);
        }
    }

    public function deleteCurriculum($curriculum_id)
    {
        $userDelete = Curriculum::where('user_id', Auth::user()->id)->delete();
        if ($userDelete) {
            return response()->json([
                'message' => 'Seu currículo foi deletado com sucesso',
                'status' => 'success',
                'redirect' => route('candidatedash'),
            ]);
        } else {
            return response()->json([
                'message' => 'Erro ao deletar, tente novamente mais tarde',
                'status' => 'error'
            ]);
        }
    }

    public function getUserCurriculum()
    {
        $curriculum = Curriculum::where('user_id', Auth::user()->id)
            ->first();

        if ($curriculum) {
            $experiences = ProfessionalExperience::where('curriculum_id', $curriculum->id)
                ->orderByDesc('id')
                ->get();

            $courses = Course::where('curriculum_id', $curriculum->id)
                ->orderByDesc('id')
                ->get();
        } else {
            $experiences = [];
            $courses = [];
        }

        return response()->json([
            'curriculum' => $curriculum,
            'experiences' => $experiences,
            'courses' => $courses,
        ], 200);
    }

    public function createExperience(Request $request)
    {
        $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();

        $newExperience = ProfessionalExperience::create([
            'curriculum_id' => $curriculum->id,
            'name_company' => $request->name_company,
            'company_field' => $request->company_field,
            'occupied_job' => $request->occupied_job,
            'years' => $request->years,
            'months' => $request->months
        ]);

        return $newExperience;
    }

    public function getExperience($experience)
    {
        $experience = ProfessionalExperience::where('id', $experience)->first();
        return response()->json(['experience' => $experience]);
    }

    public function editExperience(Request $request, $experience)
    {
        $experienceUpdate = ProfessionalExperience::where('id', $experience)->update([
            'name_company' =>  $request->name_company,
            'company_field' => $request->company_field,
            'occupied_job' => $request->occupied_job,
            'years' => $request->years,
            'months' => $request->months
        ]);

        if ($experienceUpdate) {
            return response()->json(['message' => 'Sucesss', 200]);
        } else {
            return;
        }
    }

    public function deleteExperience($experience_id)
    {
        ProfessionalExperience::where('id', $experience_id)->delete();
        return;
    }

    public function createCourse(Request $request)
    {
        $curriculum = Curriculum::where('user_id', Auth::user()->id)->first();

        $newCourse = Course::create([
            'curriculum_id' => $curriculum->id,
            'name_courses' => $request->name_courses,
            'school' => $request->school,
            'hours' => $request->hours
        ]);

        return $newCourse;
    }

    public function getCourse($course)
    {
        $course = Course::where('id', $course)->first();
        return response()->json(['course' => $course]);
    }

    public function editCourse(Request $request, $course)
    {
        $courseUpdate = Course::where('id', $course)->update([
            'name_courses' => $request->name_courses,
            'school' => $request->school,
            'hours' => $request->hours
        ]);

        if ($courseUpdate) {
            return response()->json(['message' => 'Sucesss', 200]);
        } else {
            return;
        }
    }

    public function deleteCourse($course_id)
    {
        Course::where('id', $course_id)->delete();
        return;
    }

    public function editUserCurriculum(Request $request)
    {
        $curriculumUpdate = Curriculum::where('user_id', Auth::user()->id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'cep' => $request->cep,
            'city' => $request->city,
            'state' => $request->state,
            'cnh' => $request->cnh,
            'schooling_level' => $request->schooling_level,
            'formation' => $request->formation,
            'institution' => $request->institution,
            'is_handicapped' => $request->is_handicapped,
            'hiring_type' => $request->hiring_type,
            'is_employed' => $request->is_employed,
            'whatsapp' => $request->whatsapp,
            'phone' => $request->phone,
            'desired_salary' => $request->desired_salary,
            'desired_function' => $request->desired_function,
            'additional_considerations' => $request->additional_considerations,
            'found_us' => $request->found_us,
        ]);


        if ($curriculumUpdate) {
            return; //response()->json(['message' => 'Sucess' , 200]);
        } else {
            return;
        }
    }

    public function destroyUserCurriculum($curriculum_id)
    {
        Curriculum::where('id', $curriculum_id)->delete();
        return response()->json(['message' => 'Curriculo apagado com sucesso!'], 200);
    }
}
