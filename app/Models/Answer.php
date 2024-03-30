<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;


    protected  $table = 'answers';

    protected $fillable =
        [
            'user_id',
            'title',
            'description',
            'answer_image',
            'vote',
            'question_id',
        ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function questions()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(AnswerComment::class, 'answer_id', 'id');
    }
}
