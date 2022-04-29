<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnsVotes extends Model
{
    use HasFactory;

    public $vote;
    public $answer_id;
    public $user_id;
}
