<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Candidate\HomeCandidateController;
use App\Http\Controllers\Company\HomeCompanyController;
use App\Http\Controllers\Company;
use App\Http\Controllers\SuggestionController;
use \App\Http\Controllers\SupportController;

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

Route::get('/', function () {
    return view('home-plataform');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq' , function (){
    return view('faq');
});


Route::prefix('suporte')->group(function (){

    Route::get('/cadastro', [SupportController::class, 'register']);
    Route::post('/register-support', [SupportController::class, 'create']);
    Route::get('/agradecimento', [SupportController::class, 'thankYou']);
});

Route::prefix('sugestao')->group(function (){

    Route::get('/cadastro', [SuggestionController::class, 'register']);
    Route::post('/register-suggestion', [SuggestionController::class, 'create']);
    Route::get('/agradecimento', [SuggestionController::class, 'thankYou']);
});


Route::prefix('empresa')->group(function (){

    Route::get('/login', function (){
        return view('Company.login-company');
     });

     Route::get('/registro', [HomeCompanyController::class, 'index'])->name('registro');
     Route::post('/register-company', [HomeCompanyController::class, 'store'])->name('register-company');

});

Route::prefix('candidato')->group(function (){

    Route::get('/entrar', [HomeCandidateController::class, 'register']);
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
