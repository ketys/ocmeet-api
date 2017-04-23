<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniqueCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unique_codes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('code', 6)->unique();
        });

        Schema::table('users', function(Blueprint $table) {
            $table->foreign('unique_code_id')->references('id')->on('unique_codes');
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
        Schema::dropIfExists('unique_codes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
