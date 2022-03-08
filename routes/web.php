<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Candidate\HomeCandidateController;
use App\Http\Controllers\Company\HomeCompanyController;
use App\Http\Controllers\Company;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/verify-acess', function(){
    if(Auth::user()->candidate == 1){
        return redirect('/candidato/dashboard');
    }else{
        return redirect('/empresa/dashboard');
    }
});*/

Route::get('/', function () {
    return view('home-plataform');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq' , function (){
    return view('faq');
});

Route::prefix('suporte')->group(function (){

    Route::get('/cadastro' , function (){
        return view('Support.support-form');
    });
    Route::get('/agradecimento', function (){
        return view('Support.thank-you-support');
    });
});

Route::prefix('sugestao')->group(function (){

    Route::get('/cadastro' , function () {
        return view('Suggestion.suggestion');
    });
    Route::get('/agradecimento', function (){
        return view('Suggestion.thank-you-suggestion');
    });
});


Route::prefix('empresa')->group(function (){

     Route::get('/entrar', [HomeCompanyController::class, 'enter']);
     Route::get('/dashboard', [HomeCompanyController::class, 'dashboard'])->middleware('company-acess');
     Route::get('/registro', [HomeCompanyController::class, 'index']);
     Route::post('/register-company', [HomeCompanyController::class, 'create'])->name('register-company');

});

Route::prefix('candidato')->group(function (){

    Route::get('/entrar', [HomeCandidateController::class, 'entrar']);
    Route::get('/dashboard', [HomeCandidateController::class, 'dashboard'])->middleware('candidate-acess');
    Route::get('/registro', [HomeCandidateController::class, 'index']);
    Route::post('/register-candidate', [HomeCandidateController::class, 'create'])->name('register-candidate');

});

Route::prefix('avaliacao')->group(function (){

    Route::get('/gostou-do-nosso-site', function (){
        return view('Evaluation.evaluation');
    });
    Route::get('/avalie-sua-experiencia', function (){
        return view('Evaluation.rate-us');
    });
    Route::get('/agradecimento', function (){
        return view('Evaluation.thank-you');
    });
});

Route::prefix('curriculos')->group(function (){

    Route::get('/cadastro', function (){
        return view('Applicant.Registration.register-tab');
    });
    Route::get('/buscar', function (){
        return view('Search.search');
    });
    Route::get('/resultado', function (){
        return view('Search.search-result');
    });
});

Route::get('/planos', function (){
    return view('plans');
});
