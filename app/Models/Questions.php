<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    public function question_votes()
    {
        return $this->hasMany('App\Models\QuesVotes','question_id','id');
    }
    public function answers()
    {
        return $this->hasMany('App\Models\Answers','question_id','id');
    }
}
