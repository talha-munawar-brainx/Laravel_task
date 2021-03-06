<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuesVotes extends Model
{
    use HasFactory;

    public $vote;
    public $question_id;
    public $user_id;
}
