<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsUniqueCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_unique_codes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->integer('unique_code_id')->unsigned();
        });

        Schema::table('cars_unique_codes', function(Blueprint $table) {
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('unique_code_id')->references('id')->on('unique_codes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('cars_unique_codes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
