<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned()->index();
            $table->foreign('job_id')->references('id')->on('jobs'); //->onDelete('cascade') ==> usuwanie 
            $table->bigInteger('dest_user_id')->unsigned()->index();
            $table->foreign('dest_user_id')->references('id')->on('users');
            $table->bigInteger('source_user_id')->unsigned()->index();
            $table->foreign('source_user_id')->references('id')->on('users');
            $table->string('topic');
            $table->string('content');
            $table->timestamp('sending_date');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
