<?php

use App\Http\Controllers\QuestionnaireController;
use App\Models\Questionnaire;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for questionnaire creation
Route::get('/questionnaires/create' , [QuestionnaireController::class, 'create']);
Route::post('/questionnaires' , [QuestionnaireController::class, 'store']);
Route::get('/questionnaires/{id}' , [QuestionnaireController::class, 'show']);