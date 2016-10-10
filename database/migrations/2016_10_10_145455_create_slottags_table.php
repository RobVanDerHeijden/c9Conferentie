<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlottagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slottags', function (Blueprint $table) {
            $table->integer('idSlot')->unsigned();
            $table->foreign('idSlot')->references('id')->on('slots');
            $table->integer('idTag')->unsigned();
            $table->foreign('idTag')->references('idTag')->on('tags');
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
    }
}
