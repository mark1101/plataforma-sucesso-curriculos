<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Candidate\HomeCandidateController;
use App\Http\Controllers\Company\HomeCompanyController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\Company;
use App\Http\Controllers\General\CandidateCurriculumController;
use App\Http\Controllers\General\CompanyCurriculumController;

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

Route::get('/verify-acess', function () {
    if (Auth::user()->candidate == 1) {
        return redirect()->route('candidatedash');
    } else {
        return redirect()->route('dashboard.company');
    }
});

Route::get('/', function () {
    return view('home-plataform');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/faq', function () {
    return view('faq');
});

//ROUTES SUPPORT
Route::prefix('suporte')->group(function () {

    Route::get('/cadastro', [SupportController::class, 'register']);
    Route::post('/register-support', [SupportController::class, 'create']);
    Route::get('/agradecimento', [SupportController::class, 'thankYou']);
});


//ROUTES SUGGESTION
Route::prefix('sugestao')->group(function () {

    Route::get('/cadastro', [SuggestionController::class, 'register']);
    Route::post('/register-suggestion', [SuggestionController::class, 'create']);
    Route::get('/agradecimento', [SuggestionController::class, 'thankYou']);
});


//ROUTES GUEST
Route::middleware(['no-auth'])->group(function () {
    Route::get('/empresa/entrar', [HomeCompanyController::class, 'enter']);
    Route::get('/candidato/entrar', [HomeCandidateController::class, 'enter']);
});

//ROUTES COMPANY
Route::middleware(['company-acess'])->group(function () {
    Route::get('/empresa/dashboard', [HomeCompanyController::class, 'dashboard'])->name('dashboard.company');
    Route::get('/planos-empresa' , function(){
        return view('Company.plans');
    });
    Route::get('/empresa/acessar-curriculos', [HomeCompanyController::class, 'acess']);
    Route::get('/empresa/resultado-busca', [HomeCompanyController::class, 'result']);

    Route::get('/create-curriculum-download/{id}', [CompanyCurriculumController::class, 'getDownloadCurriculum']);
    Route::get('/empresa/encontrar-curriculos', function (){
            return view('Search.search-result');
    });

    Route::get('/get-curriculum-general' , [CompanyCurriculumController::class, 'listCurriculum']);
    Route::post('/purchase-curriculum' , [CompanyCurriculumController::class, 'purchaseCurriculum']);

    Route::get('/get-data-company-user' , [HomeCompanyController::class, 'getData']);
    Route::get('/alter-plan-company/{id}', [HomeCompanyController::class, 'alterPlan']);
});
Route::get('/empresa/registro', [HomeCompanyController::class, 'index']);
Route::post('/empresa/register-company', [HomeCompanyController::class, 'create'])->name('register-company');


//ROUTES CANDIDATE
Route::middleware(['candidate-acess'])->group(function () {
    Route::get('/candidato/dashboard', [HomeCandidateController::class, 'dashboard'])->name('candidatedash');

    //CURRICULUM
    Route::post('/create-curriculum', [CandidateCurriculumController::class, 'create']);
    Route::get('/get-my-curriculum' , [CandidateCurriculumController::class, 'getUserCurriculum']);
    Route::get('/meu-curriculo' , function(){
        return view('Applicant.see-curriculum');
    })->middleware('see-curriculum');
    Route::put('/edit-curriculum' , [CandidateCurriculumController::class, 'editUserCurriculum']);
    Route::post('/create-image-curriculum' , [CandidateCurriculumController::class, 'addImage']);
    Route::delete('/delete-curriculum/{id}' , [CandidateCurriculumController::class, 'deleteCurriculum']);

    Route::get('/get-experience/{id}', [CandidateCurriculumController::class, 'getExperience']);
    Route::put('/edit-experience/{id}', [CandidateCurriculumController::class, 'editExperience']);

    Route::get('/get-course/{id}' , [CandidateCurriculumController::class, 'getCourse']);
    Route::put('/edit-course/{id}', [CandidateCurriculumController::class, 'editCourse']);

    Route::post('/create-new-experience' , [CandidateCurriculumController::class, 'createExperience']);
    Route::post('/create-new-course', [CandidateCurriculumController::class, 'createCourse']);

    Route::delete('/delete-experience/{id}', [CandidateCurriculumController::class, 'deleteExperience']);
    Route::delete('/delete-course/{id}', [CandidateCurriculumController::class, 'deleteCourse']);

    Route::get('/candidato-planos' , function(){
        return view('Applicant.plans');
    });

    Route::get('/candidade-get-data', [HomeCandidateController::class, 'getData']);
    Route::get('/candidate-alter-plan/{id}' , [HomeCandidateController::class, 'alterPlan']);

});
Route::get('/candidato/registro', [HomeCandidateController::class, 'index']);
Route::post('/candidato/register-candidate', [HomeCandidateController::class, 'create'])->name('register-candidate');


Route::prefix('avaliacao')->group(function () {

    Route::get('/gostou-do-nosso-site', function () {
        return view('Evaluation.evaluation');
    });
    Route::get('/avalie-sua-experiencia', function () {
        return view('Evaluation.rate-us');
    });
    Route::get('/agradecimento', function () {
        return view('Evaluation.thank-you');
    });
});

Route::prefix('curriculos')->group(function () {

    Route::get('/cadastro', function () {
        return view('Applicant.Registration.register-tab');
    })->middleware('register-curriculum');
    Route::get('/buscar', function () {
        return view('Search.search');
    });
    Route::get('/resultado', function () {
        return view('Search.search-result');
    });
});

Route::get('/planos', function () {
    return view('plans');
});

