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


Route::get('/homepage', [\App\Http\Controllers\questionController::class, 'show'])
    ->name('homePage.show');

Route::get('/answers/{question_id}', [\App\Http\Controllers\answerController::class, 'show'])
    ->name('answer.show');

Route::get('/questions/ask', [\App\Http\Controllers\questionController::class, 'create'])
    ->name('question.create',);

Route::post('insert_question', [\App\Http\Controllers\questionController::class, 'store'])
    ->name('question.store');

Route::post('insert_answer', [\App\Http\Controllers\answerController::class, 'store'])
    ->name('answer.store');

Route::get('/question_vote/{question_id}/{vote}', [\App\Http\Controllers\QuestionVoteController::class, 'store'])
    ->name('QuestionVote.store');
Route::get('/answer_vote/{question_id}/{answer_id}/{vote}',
    [\App\Http\Controllers\AnswerVoteController::class, 'store'])->name('AnswerVote.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
