<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matricula', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('folio')->nullable(); 
            $table->string('numero_matricula');
            $table->date('fecha_matricula')->nullable(); 
            $table->string('foto');
            $table->integer('sede');
            $table->string('jornada');
            $table->enum('tipo', ['nuevo', 'antiguo']);
            $table->integer('grado');
            $table->string('repitente');
            $table->date('fecha_retiro')->nullable(); 
            $table->string('motivo_retiro');
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
        //
         Schema::drop('matricula');
    }
}
