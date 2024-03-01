<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorFloorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_floor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('investor_id');
            $table->unsignedInteger('floor_id');
            $table->string('investor_name');
            $table->string('floor_name');
            $table->timestamps();
            $table->foreign('investor_id')->references('id')->on('investors');
            $table->foreign('floor_id')->references('id')->on('floors');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investor_floor');
    }
}
