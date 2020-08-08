<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('job_seeker_profiles', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('image');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('first_name');
            $table->string('gender');
            $table->string('location');
            $table->string('marital_status');
            $table->string('position');
            $table->string('total_exp');
            $table->string('file');
            $table->string('about');
            $table->string('mobile');
            $table->string('contact_email');
            $table->string('facebook_id');
            $table->string('linkedin_id');
            $table->string('twitter_id');
            $table->string('higher_qualification');
            $table->string('specialization_course');
            $table->string('college_name');
            $table->string('passing_year');
            $table->string('current_designation');
            $table->string('company_name');
            $table->string('company_location');
            $table->string('company_experience');
            $table->string('annual_salary');
            $table->string('industry');
            $table->string('functional_area');
            $table->string('discription');
            $table->string('project_name');
            $table->string('project_year');
            $table->string('client_name');
            $table->string('client_description');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_seeker_profiles');
    }
}
