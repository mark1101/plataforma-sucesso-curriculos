<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\Curriculum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeCompanyController extends Controller
{
    public function enter()
    {
        return view('Company.login-company');
    }

    public function dashboard()
    {
        $userName = Auth::user()->name;
        //$curriculumUser = Curriculum::where('user_id' , Auth::user()->id)->first();

        return view('Company.dashboard' , [
            'name' => $userName,
            'cnpj'=> $userName,
            'status' => $userName,
            'address' => $userName,
        ]);
    }

    public function index()
    {
        return view('Company.create-account');
        // return view de cadastro da empresa
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $newUser =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'company'=> 1,

        ]);

        $newCompany = Company::create([
            'user_id' => $newUser['id'],
            'name' => $data['name'],
            'cnpj' => $data['cnpj'],
            'address' => $data['address']
        ]);

        CompanyCurriculumQuantity::create([
            'company_id' => $newCompany['id'],
        ]);

        if($newCompany){
            return view('Company.login-company');
        }else{
            return view('home-plataform');
        }

    }

    public function edit(Request $request, $user_id)
    {
        $data = $request->all();
    }

    public function destroy($user_id)
    {

    }
}
