<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('equipment_id')->unsigned();
            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->bigInteger('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->integer('level');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_skill');
    }
}
