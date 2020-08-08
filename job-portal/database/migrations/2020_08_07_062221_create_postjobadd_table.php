<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostjobaddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('postjobadd'))
        {
          Schema::create('postjobadd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index(); 
            $table->string('title');  
            $table->string('experience');  
            $table->string('sallary'); 
            $table->string('no_of_pos');
            $table->string('qualification');
            $table->string('domain');
            $table->string('shift');
            $table->string('functional_area')->nullable();
            $table->string('skills');
            $table->string('genders');
            $table->string('interview_type')->nullable();
            $table->string('job_summary');
            $table->text('job_description');
            $table->string('sechedule_post')->nullable();
            $table->string('search_string');
            $table->string('tag_group')->nullable();
            $table->string('contact_no');
            $table->string('email');
            $table->string('add_other_recruiter')->nullable();
            $table->string('company_name');
            $table->string('no_of_emp');
            $table->string('location');
            $table->string('website_link');
            $table->string('company_email');
            $table->string('company_domain');
            $table->text('company_description');
            $table->string('questions')->nullable();
            $table->timestamps();
            $table->softDeletes(); 
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postjobadd');
    }
}
