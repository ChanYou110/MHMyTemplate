<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('slot1');
            $table->integer('slot2');
            $table->integer('slot3');
            $table->bigInteger('skill1_id')->unsigned();
            $table->foreign('skill1_id')->references('id')->on('skills');
            $table->integer('skill1_level');
            $table->bigInteger('skill2_id')->unsigned();
            $table->foreign('skill2_id')->references('id')->on('skills');
            $table->integer('skill2_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charms');
    }
}
