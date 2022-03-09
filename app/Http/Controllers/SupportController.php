<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function register(){
        return view('Support.support-form');
    }

    public function thankYou(){
        return view('Support.thank-you-support');
    }

    public function create(Request $request){
        $data = $request->all();
        $today = date('Y/m/d');

        $new =Help::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'problem' => $data['problem'],
            'date' => $today
        ]);
        if($new)
            return redirect('/suporte/agradecimento');
    }
}
