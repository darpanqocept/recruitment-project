<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeekerPersonalInfo extends Model
{
    protected $fillable =['user_id','citizen','citizenship_proof','current_address','permanent_address','address_proof','id_proof',
        'family_member','college_name','acadamic_session','document_1','document_2','document_3','professional_title','company_name','duration',
        'offer_letter','experience_letter','promotion_letter','salary_slip','referece_letter','certification1','certification2','certification3','certification4',
        'certification5','client_name','project_type','project_document','description'];
    protected $hidden = ['created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $table="job_seeker_personal_infos";
}
