<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title',30);
            $table->bigInteger('weapon_id')->unsigned();
            $table->foreign('weapon_id')->references('id')->on('weapons');
            $table->bigInteger('head_equipment_id')->unsigned();
            $table->foreign('head_equipment_id')->references('id')->on('equipment');
            $table->bigInteger('chest_equipment_id')->unsigned();
            $table->foreign('chest_equipment_id')->references('id')->on('equipment');
            $table->bigInteger('arm_equipment_id')->unsigned();
            $table->foreign('arm_equipment_id')->references('id')->on('equipment');
            $table->bigInteger('waist_equipment_id')->unsigned();
            $table->foreign('waist_equipment_id')->references('id')->on('equipment');
            $table->bigInteger('leg_equipment_id')->unsigned();
            $table->foreign('leg_equipment_id')->references('id')->on('equipment');
            $table->bigInteger('charm_id')->unsigned();
            $table->foreign('charm_id')->references('id')->on('charms');
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
