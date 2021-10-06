<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function likes() {
        return $this->belongsToMany(Question::class, 'user_likes', 'question_id', 'answer_id');
    }

    function initials()
    {
        $ret = '';
        foreach (explode(' ', $this->name) as $word)
            $ret .= strtoupper($word[0]);
        return $ret;
    }
}
