<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserverings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idTicket')->unsigned();
            $table->foreign('idTicket')->references('id')->on('tickets');
            $table->integer('idMaaltijd')->unsigned();
            $table->foreign('idMaaltijd')->references('id')->on('maaltijds');
            $table->string('betaalmethode');
            $table->string('barcode');
            $table->float('prijs');
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
        Schema::drop('reserverings');
    }
}
