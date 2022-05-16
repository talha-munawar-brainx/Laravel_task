<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    public function answer_votes()
    {
        return $this->belongsToMany('App\Models\User','ans_votes','answer_id',
            'user_id', 'id','id')->withPivot('vote');
    }
    public function positive_answer_votes()
    {
        return $this->belongsToMany('App\Models\User','ans_votes','answer_id',
            'user_id', 'id','id')->where('vote',1);
    }
    public function negative_answer_votes()
    {
        return $this->belongsToMany('App\Models\User','ans_votes','answer_id',
            'user_id', 'id','id')->where('vote',-1);
    }

}
