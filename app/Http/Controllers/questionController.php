<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class questionController extends Controller
{
    /**
     * Store a new question.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insert_question(Request $request)
    {
        $question = new Questions;
        $question->title =$request->title;
        $question->content=$request->description;
        $question->asked_by=15;
        $question->save();
        return redirect('/')->with('staus',"Question has been added");
    }
}
