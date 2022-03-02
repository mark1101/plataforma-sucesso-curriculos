<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/empresa', function (){
   return view('Company.login-company');
});

Route::get('/candidato', function () {
    return view('Applicant.login-applicant');
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

Route::get('/1', function (){
   return view('Applicant.Registration.register-test');
});
Route::get('/2', function (){
    return view('Applicant.Registration.register-2');
});
