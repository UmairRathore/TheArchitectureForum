<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerVote extends Model
{
    use HasFactory;
    protected $table = 'answer_votes';

    protected $fillable =
        [
            'answer_id',
            'user_id',
            'up_votes',
            'down_votes',
        ];
}
