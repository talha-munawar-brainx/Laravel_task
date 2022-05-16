<?php

namespace App\Http\Controllers;

use App\Models\QuesVotes;
use Illuminate\Http\Request;

class QuestionVoteController extends Controller
{
    public function store(Request $request)
    {

        $user = auth()->user();
        $question_votes = QuesVotes::all()->where('question_id', $request->question_id)
            ->where('user_id', $user->id);
        if ($question_votes->count() > 0) {
        } else {
            $question_vote = new QuesVotes();
            $question_vote->question_id = $request->question_id;
            $question_vote->user_id = $user->id;
            $question_vote->vote = $request->vote;
            $question_vote->save();
        }

        return redirect()->route('homePage.show');
    }
}
