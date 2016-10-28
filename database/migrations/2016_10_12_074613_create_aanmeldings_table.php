<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAanmeldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aanmeldings', function (Blueprint $table) {
            $table->increments('idAanmelding');
            $table->integer('idSlot')->unsigned();
            $table->foreign('idSlot')->references('id')->on('slots');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('onderwerp');
            $table->string('omschrijving');
            $table->string('wensen');
            $table->integer('voorkeur')->unsigned()->nullable();
            $table->float('kosten')->unsigned();
            $table->string('status');
            $table->float('tegenBod')->unsigned();
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
        Schema::drop('aanmeldings');
    }
}
