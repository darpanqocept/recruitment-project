<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_type','first_name','last_name','phone','email','password','confirmpass','checked'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table='users';

     public function posts()
     {
         return $this->hasMany('App\Models\UserPostFeed');
    }

// user can have many comments as well

    public function comments()
    {
      return $this->hasMany('App\Models\UserPostfeedcomment');
    }
     public function likes()
    {
      return $this->hasOne('App\Models\UserPostfeedlike');
    }
}
