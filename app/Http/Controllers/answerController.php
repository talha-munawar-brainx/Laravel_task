<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;

class answerController extends Controller
{
    /**
     * Store a new answer.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function insert_answer(Request $request)
    {
//        ddd($request);
        $answer = new Answers();
        $answer->question_id = $request->question_id;
        $answer->content = $request->answer;
        $answer->Answered_by = 15;
        $answer->save();
        return redirect("/answers/$answer->question_id")->with('status', "answer has been added");
    }
}
