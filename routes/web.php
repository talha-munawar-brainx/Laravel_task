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

//$questions = \App\Models\Questions::with('question_votes')
//    ->orderBy("updated_at", "desc")->get();
//$answers = App\Models\Answers::all();

Route::get('/', [\App\Http\Controllers\questionController::class,'show'])->name('homePage');

Route::get('/answers/{question_id}',[\App\Http\Controllers\answerController::class,'show'])->name('answer');

Route::get('/questions/ask', [\App\Http\Controllers\questionController::class, 'create'])->name('question',);

Route::post('insert_question', [\App\Http\Controllers\questionController::class, 'store']);

Route::post('insert_answer', [\App\Http\Controllers\answerController::class, 'store']);
