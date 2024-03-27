<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPolicy extends Model
{
    use HasFactory;

    protected $table = "content_policies";
    protected $fillable =
        [
            'description',
        ];
}
