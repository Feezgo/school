<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearColumnaEstudiante extends Migration
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
            $table->integer('dpto_expdicion')->unsigned();
            $table->foreign('dpto_expdicion')->references('id')->on('departamento')->onDelete('cascade');
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
            $table->dropForeign('estudiantes_dpto_expdicion_foreign');
            $table->dropColumn('dpto_expdicion');
            
        });
    }
}
