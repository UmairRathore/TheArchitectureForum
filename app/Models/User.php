<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname', 'lname', 'name', 'email', 'role', 'password', 'gender', 'location',
        'about_me', 'last_seen', 'instagram_url', 'facebook_url', 'twitter_url', 'profile_image',
        'student_or_worker', 'student_or_worker_workplace','following','followers'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


//    public function badges()
//    {
//        return $this->belongsToMany(Badge::class, 'user_badges', 'user_id', 'badge_id');
//    }

    public function questions()
    {
        return $this->hasMany(Question::class,'user_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class,'user_id','id');
    }

}
