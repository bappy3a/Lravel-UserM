<?php

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
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
			
			$table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password', 255)->nullable();
            $table->string('address')->default('');
            $table->string('phone', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('date_of_birth', 255)->nullable();
            $table->string('role', 255);
            $table->string('status', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('image')->default('');
            $table->string('google', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('skype', 255)->nullable();
            $table->string('dribbble', 255)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
