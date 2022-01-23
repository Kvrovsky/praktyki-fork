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
            $table->id('id'); //id joba
            $table->string('name'); //nazwa
            $table->string('description'); //opis
            $table->boolean('permanent')->default(1); //praca stała (domyślnie tak)
            $table->boolean('remote')->default(0); //praca zdalna (domyślnie nie)
            $table->float('wage'); //wynagrodzenie
            $table->string('wage_period')->default("miesięcznie"); // rozliczanie, rocznie, miesięcznie, tygodniowo itp, domyślnie miesięcznie
            $table->boolean('negotiable')->default(0); //czy wynagrodzenie podlega negocjacji, domyślnie nie
            $table->string('city'); //miejscowość
            $table->string('days')->default("poniedziałek - piątek"); //dni zatrudnienia, domyślnie poniedziałek-piątek
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories'); //id kategorii
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users'); //id użytkownika dodającego
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
        Schema::dropIfExists('jobs');
    }
}
