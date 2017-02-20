<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFacturaConcepto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaconcepto', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('factura2017');
            
            $table->string('fecha_inicio');
            $table->string('fecha_fin');

            $table->integer('Concepto')->unsigned();
            $table->foreign('Concepto')->references('id')->on('conceptos');

            $table->string('grado_est');
            $table->string('nota');
            $table->string('mes');
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
        Schema::drop('facturaconcepto');
    }
}
