<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekerPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('job_seeker_personal_infos')) {

            Schema::create('job_seeker_personal_infos', function (Blueprint $table) {
                $table->Increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('citizen');
                $table->string('citizenship_proof');
                $table->string('current_address');
                $table->string('permanent_address');
                $table->string('address_proof');
                $table->string('id_proof');
                $table->string('family_member');
                $table->string('college_name');
                $table->string('acadamic_session');
                $table->string('document_1');
                $table->string('document_2');
                $table->string('document_3');
                $table->string('professional_title');
                $table->string('company_name');
                $table->string('duration');
                $table->string('offer_letter');
                $table->string('experience_letter');
                $table->string('promotion_letter');
                $table->string('salary_slip');
                $table->string('referece_letter');
                $table->string('certification1');
                $table->string('certification2');
                $table->string('certification3');
                $table->string('certification4');
                $table->string('certification5');
                $table->string('client_name');
                $table->string('project_type');
                $table->string('project_document');
                $table->string('description');
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
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
        Schema::dropIfExists('job_seeker_personal_infos');
    }
}
