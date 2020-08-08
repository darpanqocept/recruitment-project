<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ratings')) {
            Schema::create('ratings', function (Blueprint $table) {
                $table->Increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('job_seeker_profile_id')->unsigned();
                $table->string('rating');
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('job_seeker_profile_id')->references('id')->on('job_seeker_profiles');
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
        Schema::dropIfExists('ratings');
    }
}
