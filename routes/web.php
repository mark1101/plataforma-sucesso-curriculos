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

    Route::get('/login', [HomeCompanyController::class, 'login'])->name('company.login');
    Route::post('/login', [HomeCompanyController::class, 'authLogin'])->name('company.login.post');

    Route::get('/registro', [HomeCompanyController::class, 'index'])->name('registro');
    Route::post('/register-company', [HomeCompanyController::class, 'store'])->name('register-company');

});



Route::prefix('candidato')->group(function (){

    Route::get('/login', function () {
        return view('Applicant.login-applicant');
    });
    Route::get('/registro', [HomeCandidateController::class, 'index'])->name('registro');
    Route::post('/register-candidate', [HomeCandidateController::class, 'store'])->name('register-candidate');

});


/*Route::get('/candidato', function () {
    return view('Applicant.login-applicant');
});*/

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
