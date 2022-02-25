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
   return view('Support.thank-you-support');
});

Route::get('/sugestao' , function () {
    return view('Suggestion.suggestion');
});
