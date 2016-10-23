<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearColumnaEstudiante3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('estudiantes', function ($table) {

            $table->integer('dpto_nacimiento')->unsigned();
            $table->foreign('dpto_nacimiento')->references('id')->on('departamento');

            $table->integer('mpio_nacimiento')->unsigned();
            $table->foreign('mpio_nacimiento')->references('id')->on('municipio');

            $table->integer('dpto_recidencia')->unsigned();
            $table->foreign('dpto_recidencia')->references('id')->on('departamento');

            $table->integer('mpio_recidencia')->unsigned();
            $table->foreign('mpio_recidencia')->references('id')->on('municipio');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('estudiantes', function ($table) {
            $table->dropForeign('estudiantes_dpto_nacimiento_foreign');
            $table->dropColumn('dpto_nacimiento');

            $table->dropForeign('estudiantes_mpio_nacimiento_foreign');
            $table->dropColumn('mpio_nacimiento');

            $table->dropForeign('estudiantes_dpto_recidencia_foreign');
            $table->dropColumn('dpto_recidencia');

            $table->dropForeign('estudiantes_mpio_recidencia_foreign');
            $table->dropColumn('mpio_recidencia');
            
        });
    }
}
