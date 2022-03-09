<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Curriculum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeCandidateController extends Controller
{
    public function register(){
        return view('Applicant.login-applicant');
    }
    public function dashboard(){
        $userName = Auth::user()->name;
        $curriculumUser = Curriculum::where('user_id' , Auth::user()->id)->first();

        return view('Applicant.dashboard' , [
            'name' => $userName,
            'curriculum' => $curriculumUser
        ]);
    }
    public function index()
    {
        return view('Applicant.create-account');
        // return view de cadastro do candidado
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newCandidate = Candidate::create([
            'user_id' => $newUser['id'],
            'name' => $newUser['name'],
        ]);
        if ($newCandidate) {
            return view('Applicant.login-applicant');

        }
    }


    public function edit(Request $request, $user_id)
    {
        // edita o candidato
    }

    public function destroy($user_id)
    {
        // deleta o candidato
    }
}
