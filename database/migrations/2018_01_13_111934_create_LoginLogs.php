<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          $pro = config('global.model').'_loginLog';

        Schema::create($pro, function (Blueprint $table) {
            $table->increments('logId');
            $table->integer('userId');
            $table->string('ipAddress',255)->defaul('');
            $table->string('country',255)->defaul('');
            $table->string('city',255)->defaul('');
            $table->string('device')->defaul('');
            $table->string('browser',255)->defaul('');
            $table->string('loggedOn',255)->default('');
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
        $pro = config('global.model').'_loginLog';
        Schema::dropIfExists($pro); 
    }
}
