<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserpostfeedlikeTable extends Migration
{
    /**
     * Run the migrations.
     *userid
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('userpostfeedlike'))
        {
            Schema::create('userpostfeedlike', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('user_id')->index(); 
                $table->bigInteger('user_post_feed_id')->index();
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
        Schema::dropIfExists('userpostfeedlike');
    }
}
