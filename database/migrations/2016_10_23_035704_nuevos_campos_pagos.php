<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NuevosCamposPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos', function(Blueprint $table)
        {
            $table->integer('recargo')->unsigned()->default(0);
            $table->string('cursos')->default('');
        });

        Schema::table('planes_de_pagos', function(Blueprint $table)
        {
            $table->integer('pagado')->unsigned()->default(0)->after('id_matricula');
            $table->date('fecha_limite')->after('fecha_pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('pagos', function(Blueprint $table)
        {
            $table->dropColumn('recargo');
            $table->dropColumn('cursos');
        });

        Schema::table('planes_de_pagos', function(Blueprint $table)
        {
            $table->dropColumn('pagado');
            $table->dropColumn('fecha_limite');
        });
    }
}
