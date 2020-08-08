<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPostfeedcomment extends Model
{
    protected $table = 'userpostfeedcomment';

    protected $fillable = [
        'id','user_id','user_post_feed_id','comment','created_at','updated_at','deleted_at'
    ];

    protected $casts = [
        'id' => 'int',
        'user_id' => 'int',
        'user_post_feed_id' => 'int',
        'comment' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\UserPostFeed');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}