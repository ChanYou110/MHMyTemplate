<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrnamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ornaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 10);
            $table->Integer('used_slot1');
            $table->Integer('used_slot2');
            $table->Integer('used_slot3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ornaments');
    }
}
