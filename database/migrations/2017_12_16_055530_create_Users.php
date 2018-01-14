<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        //
        $pro = config('global.model').'_users';
        Schema::create($pro,function($table){
            $table->increments('userId');
            $table->string('firstName',255);
            $table->string('lastName',255);
            $table->string('email',255);
            $table->string('mobile',20);
            $table->string('otp',20)->default('');
            $table->integer('otpVerify')->default(1);
            $table->string('profile',255)->default('');
            $table->string('profileStatus',255)->default(0);
            $table->string('password',255);
            $table->string('authToken',255);
            $table->string('tempToken',255);
            $table->string('deviceToken',255);
            $table->integer('deviceType')->default(1);
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
        //
        $pro = config('global.model').'_users';
        Schema::dropIfExists($pro);
    }
}
