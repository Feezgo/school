<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionEstudiantesMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matricula', function(Blueprint $table)
        {
            $table->integer('id_estudiante')->unsigned()->after('id');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matricula', function(Blueprint $table)
        {
            $table->dropForeign(['id_estudiante']);
            $table->dropColumn('id_estudiante');
        });
    }
}
