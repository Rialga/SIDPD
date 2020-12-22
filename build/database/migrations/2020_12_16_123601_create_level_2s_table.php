<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevel2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_2', function (Blueprint $table) {
            $table->bigIncrements('lvl2_id');
            $table->unsignedBigInteger('lvl1_id');
            $table->string('detail', 255);

            $table->foreign('lvl1_id')->references('lvl1_id')->on('level_1')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_2s');
    }
}
