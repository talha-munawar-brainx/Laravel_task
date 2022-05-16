<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePositive($query)
    {
        return $query->where('vote', 1);
    }


    public function question_votes()
    {
        return $this->belongsToMany('App\Models\User', 'ques_votes', 'question_id',
            'user_id', 'id', 'id')->withPivot('vote');
    }

    public function positive_question_votes()
    {
        return $this->belongsToMany('App\Models\User', 'ques_votes', 'question_id',
            'user_id', 'id', 'id')->withPivot('vote');
    }

    public function negative_question_votes()
    {
        return $this->belongsToMany('App\Models\User', 'ques_votes', 'question_id',
            'user_id', 'id', 'id')->where('vote', -1);
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answers', 'question_id', 'id');
    }

}
