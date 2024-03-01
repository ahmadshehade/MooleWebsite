<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_name');
            $table->unsignedInteger('mole_id');
            $table->unsignedInteger('floor_id');
            $table->integer('employ_count');
            $table->timestamps();
            $table->foreign('mole_id')->references('id')->on('moles');
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
        Schema::dropIfExists('departments');
    }
}
