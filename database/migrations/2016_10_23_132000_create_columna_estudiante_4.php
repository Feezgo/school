<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnaEstudiante4 extends Migration
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

            $table->integer('discapacidad')->unsigned();
            $table->foreign('discapacidad')->references('id')->on('discapacidad');

            $table->integer('situacion_academica')->unsigned();
            $table->foreign('situacion_academica')->references('id')->on('situacion');
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

            $table->dropForeign('estudiantes_discapacidad_foreign');
            $table->dropColumn('discapacidad');

            $table->dropForeign('estudiantes_situacion_academica_foreign');
            $table->dropColumn('situacion_academica');
            
        });
    }
}
