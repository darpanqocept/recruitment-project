<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostJobadd extends Model
{
    protected $table = 'postjobadd';

    protected $fillable = [
        'id','user_id','title','experience','sallary','no_of_pos','qualification','domain','shift','functional_area','skills','genders','interview_type','job_summary','job_description','sechedule_post','search_string','tag_group','contact_no','email','add_other_recruiter','company_name','no_of_emp','location','website_link','company_email','company_domain','company_description','questions','created_at','updated_at','deleted_at',
    ];

    protected $casts = [
        'id' => 'int',
        'user_id' => 'int',
        'title' => 'string',
        'experience' => 'string',
        'sallary' => 'string',
        'no_of_pos' => 'string',
        'qualification' => 'string',
        'domain' => 'string',
        'shift' => 'string',
        'functional_area' => 'string',
        'skills' => 'string',
        'genders' => 'string',
        'interview_type' => 'string',
        'job_summary' => 'string',
        'job_description' => 'text',
        'sechedule_post' => 'string',
        'search_string' => 'string',
        'tag_group' => 'string',
        'contact_no' => 'string',
        'email' => 'string',
        'add_other_recruiter' => 'string',
        'company_name' => 'string',
        'no_of_emp' => 'string',
        'location' => 'string',
        'website_link' => 'string',
        'company_email' => 'string',
        'company_domain' => 'string',
        'company_description' => 'text',
        'questions' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];
}