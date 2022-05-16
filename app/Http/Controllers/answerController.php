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
        $user = auth()->user();
        $answer = new Answers();
        $answer->question_id = $request->question_id;
        $answer->content = $request->answer;
        $answer->Answered_by = $user->id;
        $answer->save();
        return redirect()->route('answer.show',['question_id' => $answer->question_id])
            ->with('status', "answer has been added");
    }

    public function show(Request $request, $question_id)
    {
//        ddd($question_id);
        $question = Questions::with(['question_votes','answers.answer_votes'])
            ->orderByDesc("updated_at")->where('id',$question_id)->firstOrFail();

        return view('answers', ['questions' => $question]);
    }

}
