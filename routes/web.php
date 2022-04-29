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

$questions = App\Models\Questions::all();
$answers = App\Models\Answers::all();


Route::get('/', function () use ($questions) {
    return view('homePage', ['questions' => $questions]);
});

Route::get('/answers/{question_id}', function ($slug) use ($answers, $questions) {
    return view('answers', ['answers' => $answers->where('question_id', $slug), 'question' => $questions->find($slug)]);
});

Route::get('/questions/ask', function () {
    return view('ask_question');
});

Route::post('insert_question', [\App\Http\Controllers\questionController::class, 'insert_question']);

Route::post('insert_answer', [\App\Http\Controllers\answerController::class, 'insert_answer']);
