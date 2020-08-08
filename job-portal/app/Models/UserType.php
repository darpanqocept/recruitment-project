<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'usertype';

    protected $fillable = [
        'id','name'
    ];

    protected $casts = [
        'id' => 'int',
        'name' => 'string'
    ];
}
