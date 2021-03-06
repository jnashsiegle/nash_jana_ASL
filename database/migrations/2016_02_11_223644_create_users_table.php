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
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2016_02_11_223644_create_users_table.php
            $table->string('name');
            $table->string('email')->unique()->nullable();
=======
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('facebook_id')->unique();
>>>>>>> origin/master:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('password', 60);
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
