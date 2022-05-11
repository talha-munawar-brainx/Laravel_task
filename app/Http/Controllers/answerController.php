<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;

class answerController extends Controller
{
    /**
     * Store a new answer.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
//        ddd($request);
        $answer = new Answers();
        $answer->question_id = $request->question_id;
        $answer->content = $request->answer;
        $answer->Answered_by = 15;
        $answer->save();
        return redirect()->route('answer.show',['question_id' => $answer->question_id])
            ->with('status', "answer has been added");
    }

    public function show($question_id)
    {
        $questions = Questions::with('question_votes')
            ->orderBy("updated_at", "desc")->get();
        $answers = Answers::with('answer_votes')->get();
        return view('answers', ['answers' => $answers->where('question_id', $question_id),
            'question' => $questions->find($question_id)]);
    }

}
