<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasubareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areasubareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('areaId');
            $table->foreign('areaId')->references('id')->on('areas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');;
            $table->unsignedBigInteger('subareaId');
            $table->foreign('subareaId')->references('id')->on('subareas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areasubareas');
    }
}
