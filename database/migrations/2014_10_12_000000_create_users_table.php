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
            $table->string('username',32);
            $table->string('name',100);
            $table->date('DateofBirth');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile',11)->unique();
            $table->integer('status');
            $table->rememberToken();
            $table->tinyInteger('admin')->nullable();
            $table->string('image')->default('default.jpg');
            $table->string('coverimage')->default('coverImage.jpg');
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
