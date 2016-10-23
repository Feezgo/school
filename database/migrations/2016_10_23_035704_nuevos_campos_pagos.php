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
        Schema::table('pagos', function($table)
        {
            $table->integer('recargo')->unsigned()->default(0);
            $table->string('cursos')->default('');
        });

        Schema::table('planes_de_pagos', function($table)
        {
            $table->date('fecha_limite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('pagos', function($table)
        {
            $table->dropColumn('recargo');
            $table->dropColumn('cursos');
        });

        Schema::table('planes_de_pagos', function($table)
        {
            $table->dropColumn('fecha_limite');
        });
    }
}
