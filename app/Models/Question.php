<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'question_image',
        'tag_id', //upto 5
        'topic_id', //1
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }

    public function topics()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
