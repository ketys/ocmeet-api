<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unsigned()->unique()->nullable();
            $table->text('description')->nullable();
            $table->integer('image_id')->unsigned()->nullable();
            $table->integer('voting_category_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
        });

        Schema::table('cars', function(Blueprint $table) {
            $table->foreign('voting_category_id')->references('id')->on('voting_categories');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cars');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
