<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeCandidateController extends Controller
{

    public function index()
    {
        // return view de cadastro do candidado
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $newUser =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        //cria o novo candidato com new user 
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
