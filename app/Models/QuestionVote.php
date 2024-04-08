<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionVote extends Model
{
    use HasFactory;

    protected $table = 'question_votes';

    protected $fillable =
        [
            'question_id',
            'user_id',
            'up_votes',
            'down_votes',
        ];
}
