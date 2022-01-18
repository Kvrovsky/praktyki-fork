<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('description');
            $table->boolean('permanent');
            $table->boolean('remote');
            $table->float('wage');
            $table->string('wage_period'); // rozliczanie, rocznie, miesięcznie, tygodniowo itp
            $table->boolean('negotiable');
            $table->string('city');
            $table->string('days');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
        /** 
        
        * Reverse the migrations.
        *
        * @return void
        */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
