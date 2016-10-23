<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumnaEstudiante2 extends Migration
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
            
            $table->dropColumn(['mpio_expdicion']);
            $table->dropColumn(['dpto_nacimiento']);
            $table->dropColumn(['mpio_nacimiento']);
            $table->dropColumn(['dpto_recidencia']);
            $table->dropColumn(['mpio_recidencia']);
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
    }
}
