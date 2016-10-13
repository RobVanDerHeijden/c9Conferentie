<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idZaal')->unsigned();
            $table->foreign('idZaal')->references('idZaal')->on('zaals');
            $table->integer('idStatus')->unsigned();
            $table->foreign('idStatus')->references('idStatus')->on('statuses');
            $table->integer('agenda')->unsigned();
            $table->foreign('agenda')->references('id')->on('agendas');
            $table->string('beginTijd');
            $table->string('eindTijd');
            $table->string('dag');
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
        Schema::drop('slots');
    }
}
