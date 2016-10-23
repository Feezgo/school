<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearColumnaEstudiante2 extends Migration
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
            $table->integer('mpio_expdicion')->unsigned();
            $table->foreign('mpio_expdicion')->references('id')->on('municipio');
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
            $table->dropForeign('estudiantes_mpio_expdicion_foreign');
            $table->dropColumn('mpio_expdicion');
            
        });
    }
}
