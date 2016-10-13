<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservering')->unsigned();
            $table->foreign('reservering')->references('id')->on('reserverings');
            $table->integer('soort')->unsigned();
            $table->foreign('soort')->references('id')->on('ticketsoorts');
            //$table->string('soort');
            //$table->float('prijs');
            //$table->integer('beschikbaar');
            $table->string('barcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
