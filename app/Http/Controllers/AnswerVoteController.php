<?php

namespace App\Http\Controllers;

use App\Models\AnsVotes;
use Illuminate\Http\Request;

class AnswerVoteController extends Controller
{
    public function store(Request $request, $question_id, $answer_id, $vote)
    {

        $user = auth()->user();
        $answer_votes = AnsVotes::all()->where('answer_id', $request->answer_id)
            ->where('user_id', $user->id);
        if ($answer_votes->count() > 0) {
        } else {
            $answer_vote = new AnsVotes();
            $answer_vote->answer_id = $answer_id;
            $answer_vote->user_id = $user->id;
            $answer_vote->vote = $vote;
            $answer_vote->save();
        }

        return redirect()->route('answer.show', ['question_id' => $question_id]);
    }
}
