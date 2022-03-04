<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeCompanyController extends Controller
{
    public function index()
    {
        // return view de cadastro da empresa
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $newUser =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newCompany = Company::create([
            'user_id' => $newUser['id'],
            'name' => $data['name'],
            'cnpj' => $data['cnpj'],
            'addredd' => $data['address']
        ]);

        CompanyCurriculumQuantity::create([
            'company_id' => $newCompany['id'],
        ]);

        return response()->json(['message' => 'Companhia e relacoes cadastradas com sucesso!'], 200);

    }

    public function edit(Request $request, $user_id)
    {
        $data = $request->all();
    }

    public function destroy($user_id)
    {
        
    }
}
