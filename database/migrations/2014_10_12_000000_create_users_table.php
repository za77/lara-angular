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
            $table->string('firstName',255);
            $table->string('lastName',255)->default('');
            $table->string('email',255);
            $table->string('mobile',20)->default('');
            $table->string('password',255);
            $table->string('authToken',255)->default('');
            $table->string('tempToken',255)->default('');
            $table->string('deviceToken',255)->default('');
            $table->integer('deviceType')->default();
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
