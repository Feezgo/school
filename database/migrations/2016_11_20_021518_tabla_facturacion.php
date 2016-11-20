<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFacturacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('planes_de_pagos', function(Blueprint $table)
        {
            $table->dropColumn('factura');
            $table->dropColumn('anulado');
        });

        Schema::create('facturas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->date('fecha_pago');
            $table->string('consignacion')->nullable();
            $table->string('consignacion_foto')->nullable();
            $table->enum('estado', ['pendiente', 'efectuada', 'anulada'])->nullable();

            $table->timestamps();
        });

        Schema::create('facturas_detalles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_factura')->unsigned();
            $table->integer('id_plan_de_pago')->unsigned();

            $table->foreign('id_factura')->references('id')->on('facturas');
            $table->foreign('id_plan_de_pago')->references('id')->on('planes_de_pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas_detalles', function($table)
        {
            $table->dropForeign(['id_factura']);
            $table->dropForeign(['id_plan_de_pago']);
        });

        Schema::drop('facturas_detalles');
        Schema::drop('facturas');

        Schema::table('planes_de_pagos', function(Blueprint $table)
        {
            $table->integer('factura')->unsigned()->default(0)->after('estado');
            $table->boolean('anulado')->default(0);
        });
    }
}
