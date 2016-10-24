<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearCampoHistoriaAcademiaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('historias_academicas', function ($table) {
            $table->enum('grado', ['Pre-Kinder','Kinder','Transicion','1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11']);
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
        Schema::table('historias_academicas', function ($table) {
            $table->dropColumn(['grado']);            
        });
    }
}
