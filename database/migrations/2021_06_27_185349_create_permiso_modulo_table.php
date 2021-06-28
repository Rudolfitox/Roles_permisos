<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_modulo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_modulo');
            $table->unsignedBigInteger('fk_permiso');

            $table->foreign('fk_modulo')->references('id')->on('modulos');
            $table->foreign('fk_permiso')->references('id')->on('permisos');
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
        Schema::dropIfExists('permiso_modulo');
    }
}
