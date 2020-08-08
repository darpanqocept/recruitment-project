<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPostfeedshare extends Model
{
     protected $table = 'postfeedshare';

     protected $fillable = [
        'id','user_id','user_post_feed_id','created_at','updated_at','deleted_at'
    ];

     protected $casts = [
    	 'id' => 'int',
         'user_id' => 'int',
         'user_post_feed_id' => 'int',       
         'created_at' => 'datetime',
         'updated_at' => 'datetime',  
         'deleted_at' => 'datetime',       
    ];
}
