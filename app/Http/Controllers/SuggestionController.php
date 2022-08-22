<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailSuggestion;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuggestionController extends Controller
{
    public function register(){
        return view('Suggestion.suggestion');
    }

    public function thankYou(){
        return view('Suggestion.thank-you-suggestion');
    }

    public function create(Request $request){
        $data = $request->all();
        $today = date('Y/m/d');

        Mail::to('programacaohey@gmail.com')->send(new SendEmailSuggestion($data));

        $new = Suggestion::create([
        'suggestion' => $data['suggestion'],
        'date' => $today
        ]);
        if($new)
            return redirect('/sugestao/agradecimento');
    }
}
