<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $table = "badges";
    protected $fillable =
        [
            'title',
            'description',
            'badge_image',
        ];

//    public function userBadges()
//    {
//        return $this->belongsToMany(User::class, 'user_badges', 'badge_id', 'user_id');
//    }
}
