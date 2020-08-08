<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id','job_seeker_profile_id','rating'];
    protected $hidden = ['created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $table = 'ratings';

    public function user()
    {
        return $this->belongsTo(Consultant::class);
    }
}
