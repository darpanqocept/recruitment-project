<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeekerProfile extends Model
{
    protected $fillable = ['user_id','image','email','username','password','confirm_password','first_name','last_name','gender','location','marital_status'
        ,'position','total_exp','file','about','mobile','contact_email','facebook_id','linkedin_id','twitter_id','higher_qualification','specialization_course','college_name','passing_year','current_designation',
        'company_name','company_location','company_experience','annual_salary','industry','functional_area','discription','project_name','project_year','client_name','client_description'];
    protected $hidden = ['created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $table = 'job_seeker_profiles';

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
