<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLvl2DatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvl2_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lvl2_id');
            $table->string('data', 255);
            $table->bigInteger('value')->nullable();
            $table->string('satuan',50)->nullable();
            $table->string('tahun',5)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('lvl2_datas');
    }
}
