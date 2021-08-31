<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->bigInteger('weapon_types_id')->unsigned();
            $table->foreign('weapon_types_id')->references('id')->on('weapon_types');
            $table->Integer('slot1');
            $table->Integer('slot2');
            $table->Integer('slot3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}
