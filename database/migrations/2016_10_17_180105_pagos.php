<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function($table)
        {
            $table->increments('id');
            $table->enum('concepto', ['matricula', 'pension', 'otro']);
            $table->enum('aplica', ['nuevo', 'antiguo', 'todos']);
            $table->string('descipcion');
            $table->integer('costo')->unsigned();
        });

        Schema::create('planes_de_pagos', function($table)
        {
            $table->increments('id');
            $table->integer('id_pago')->unsigned();
            $table->integer('id_matricula')->unsigned();
            $table->date('fecha_pago');

            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('cascade');
            $table->foreign('id_matricula')->references('id')->on('matricula')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planes_de_pagos', function($table)
        {
            $table->dropForeign(['id_pago']);
            $table->dropForeign(['id_matricula']);
        });

        Schema::drop('planes_de_pagos');
        Schema::drop('pagos');
    }
}
