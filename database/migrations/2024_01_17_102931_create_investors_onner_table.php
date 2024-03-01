<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsOnnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors_onner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->string('investor_name')->nullabel();
            $table->integer('onner_id')->unsigned();
            $table->string('onner_name')->nullable();
            $table->timestamps();
            $table->foreign('investor_id')->references('id')->on('investors');
            $table->foreign('onner_id')->references('id')->on('onner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investors_onner');
    }
}
