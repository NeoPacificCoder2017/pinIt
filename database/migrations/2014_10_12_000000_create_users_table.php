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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('last_name');
            $table->string('first_name');
=======
            $table->string('name');
            $table->string('lastname');
            $table->string('firstname');
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
            $table->string('email')->unique();
            $table->integer('user_type_id');
            $table->string('password');
            $table->integer('user_type_id')->default(2);
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
        Schema::dropIfExists('users');
    }
}