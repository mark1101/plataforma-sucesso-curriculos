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

Route::get('/suporte' , function (){
   return view('Support.support-form');
});

Route::get('/obrigado-suporte', function (){
    return view('Support.thank-you-support');
});

Route::get('/sugestoes' , function () {
    return view('Suggestion.suggestion');
});

Route::get('/obrigado-sugestao', function (){
    return view('Suggestion.thank-you-suggestion');
});

Route::get('/empresa', function (){
   return view('Company.login-company');
});

Route::get('/candidato', function () {
    return view('Applicant.login-applicant');
});

Route::get('/gostou', function (){
    return view('Evaluation.evaluation');
});

Route::get('/avalie-sua-experiencia', function (){
    return view('Evaluation.rate-us');
});

Route::get('/obrigado-avaliacao', function (){
    return view('Evaluation.thank-you');
});

Route::get('/buscar-curriculos', function (){
    return view('Search.search');
});

Route::get('/resultado-busca-curriculos', function (){
    return view('Search.search-result');
});

Route::get('/planos', function (){
    return view('plans');
});
