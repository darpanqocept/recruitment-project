<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeekerPost extends Model
{
    protected $fillable = ['post','user_id','tags'];
    protected $hidden = ['created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $table = 'job_seeker_posts';
}
