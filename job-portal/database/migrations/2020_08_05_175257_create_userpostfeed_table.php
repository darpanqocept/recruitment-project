<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserpostfeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('userpostfeed'))
        {
            Schema::create('userpostfeed', function (Blueprint $table) {
                $table->bigIncrements('id');
                 $table->bigInteger('userid')->index();               
                $table->text('description');
                $table->string('hashtag')->nullable();
                $table->string('usertag')->nullable();
                $table->string('image')->nullable();
                $table->string('emoji')->nullable();
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
        Schema::dropIfExists('userpostfeed');
    }
}
