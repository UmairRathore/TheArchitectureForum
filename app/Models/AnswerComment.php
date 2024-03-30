<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerComment extends Model
{
    use HasFactory;

    protected $table = 'answer.comments';

    protected $fillable =
        [
            'user_id',
            'comment_on_answer',
            'answer_id',
        ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function answers()
    {
        return $this->belongsTo(Answer::class, 'answer_id', 'id');
    }
}
