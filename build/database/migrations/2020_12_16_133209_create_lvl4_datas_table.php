<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLvl4DatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lvl4_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lvl4_id');
            $table->string('data', 255);
            $table->bigInteger('value')->nullable();
            $table->string('satuan',50)->nullable();
            $table->string('tahun',5)->nullable();
            $table->timestamps();

            $table->foreign('lvl4_id')->references('lvl4_id')->on('level_4')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lvl4_datas');
    }
}
