<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevel3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_3', function (Blueprint $table) {
            $table->bigIncrements('lvl3_id');
            $table->unsignedBigInteger('lvl2_id');
            $table->string('detail', 255);

            $table->foreign('lvl2_id')->references('lvl2_id')->on('level_2')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_3s');
    }
}
