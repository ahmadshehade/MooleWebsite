<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mole_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('floor_id');
            $table->string('floor_name');
            $table->string('department_name');
            $table->string('employ_name');
            $table->integer('sallary');
            $table->string('rank');
            $table->timestamps();
            $table->foreign('mole_id')->references('id')->on('moles');
            $table->foreign('floor_id')->references('id')->on('floors');
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
        Schema::dropIfExists('employees');
    }
}
