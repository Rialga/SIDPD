<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevel4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_4', function (Blueprint $table) {
            $table->bigIncrements('lvl4_id');
            $table->unsignedBigInteger('lvl3_id');
            $table->string('detail', 255);

            $table->foreign('lvl3_id')->references('lvl3_id')->on('level_3')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_4s');
    }
}
