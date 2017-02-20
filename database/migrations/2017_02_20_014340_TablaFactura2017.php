<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFactura2017 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura2017', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');

            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiantes2017');
            $table->date('fechaRegistro');
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
        Schema::drop('factura2017');
    }
}
