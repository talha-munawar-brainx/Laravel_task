<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    public function question_votes()
    {
        return $this->belongsToMany('App\Models\User','ques_votes','question_id',
            'user_id', 'id','id')->where('vote',1);
    }
    public function answers()
    {
        return $this->hasMany('App\Models\Answers','question_id','id');
    }
}
