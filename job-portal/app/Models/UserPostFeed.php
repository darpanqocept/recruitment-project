<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPostFeed extends Model
{
     protected $table = 'userpostfeed';

     protected $fillable = [
        'id','userid','description','hashtag','usertag','image','emoji','created_at',
        'updated_at',
        'deleted_at'
    ];

     protected $casts = [
    	 'id' => 'int',
         'userid' => 'int',
         'description' => 'text',  
         'hashtag' => 'string',  
         'usertag' => 'string', 
         'image' => 'string', 
         'emoji' => 'string',
         'created_at' => 'datetime',
         'updated_at' => 'datetime',
         'deleted_at' => 'datetime'     
    ];
}
