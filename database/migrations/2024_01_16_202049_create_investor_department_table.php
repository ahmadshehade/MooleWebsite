<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_department', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->string('investor_name');
            $table->string('department_name');
            $table->timestamps();
            $table->foreign('investor_id')->references('id')->on('investors');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investor_department');
    }
}
