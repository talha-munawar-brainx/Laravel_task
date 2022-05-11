<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class questionController extends Controller
{
    /**
     * Store a new question.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $question = new Questions;
        $question->title = $request->title;
        $question->content = $request->description;
        $question->asked_by = 15;
        $question->save();
        return redirect()->route('homePage')->with('staus', "Question has been added");
    }

    public function create()
    {
        return view('ask_question');
    }

    public function show()
    {
        $questions = Questions::with('question_votes')
            ->orderBy("updated_at", "desc")->get();
        return view('homePage', ['questions' => $questions]);
    }
}
