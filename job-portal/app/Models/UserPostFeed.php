<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPostFeed extends Model
{
    protected $table = 'userpostfeed';

    protected $fillable = [
        'id','user_id','description','hashtag','usertag','image','emoji','created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'id' => 'int',
        'user_id' => 'int',
        'description' => 'text',
        'hashtag' => 'string',
        'usertag' => 'string',
        'image' => 'string',
        'emoji' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function comments()
    {
        return $this->hasMany('App\Models\UserPostfeedcomment');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\UserPostfeedlike');
    }
}