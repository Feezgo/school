<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CamposParaFacturacion extends Migration
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
            $table->integer('factura')->unsigned()->default(0)->after('estado');
            $table->boolean('anulado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planes_de_pagos', function(Blueprint $table)
        {
            $table->dropColumn('factura');
            $table->dropColumn('anulado');
        });
    }
}
