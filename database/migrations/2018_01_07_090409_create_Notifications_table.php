<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $pro = config('global.model').'_notifications';

        Schema::create($pro, function (Blueprint $table) {
            $table->increments('notificationId');
            $table->integer('from');
            $table->integer('to');
            $table->string('title',255);
            $table->string('message',255);
            $table->integer('isFile')->default(0);
            $table->string('url',255)->defaul('');
            $table->string('isRead',255)->default(0);
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
        $pro = config('global.model').'_notifications';
        Schema::dropIfExists($pro);
    }
}
