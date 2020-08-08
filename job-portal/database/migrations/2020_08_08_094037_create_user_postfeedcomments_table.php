<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPostfeedcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('userpostfeedcomment'))
        {
            Schema::create('userpostfeedcomment', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('user_id')->index();
                $table->bigInteger('user_post_feed_id')->index();
                $table->string('comment');
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
        Schema::dropIfExists('userpostfeedcomment');
    }
}