<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

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

        $new = Suggestion::create([
        'suggestion' => $data['suggestion'],
        'date' => $today
        ]);
        if($new)
            return redirect('/sugestao/agradecimento');
    }
}
