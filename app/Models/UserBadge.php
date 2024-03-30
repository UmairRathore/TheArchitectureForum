<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBadge extends Model
{
    use HasFactory;

    protected $table = "user_badges";
    protected $fillable =
        [
            'user_id',
            'badge_id',
        ];

    public function users()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    public function badges()
    {
        return $this->hasMany(Badge::class,'badge_id','id');
    }

}
