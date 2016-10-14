<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->tinyInteger('folio')->nullable();
            $table->date('fecha_matricula')->nullable();
            $table->
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matriculas');
    }
}



N. Folio
Fecha de Matricula
Foto del estudiante
Año Lectivo
Jornada
Sede
