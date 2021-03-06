<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users'))
        {
            Schema::create('users', function (Blueprint $table) {
                $table->Increments('id');
                $table->string('user_type');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('phone')->nullable();
                $table->string('email',100)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('confirmpass');
                $table->string('checked');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
