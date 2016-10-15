<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('pin', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre_acudiente');
            $table->string('nombre_alumno', 35);
            $table->string('ocupacion', 60);
            $table->string('numero_identidad', 60);
            $table->string('correo_acudiente', 35);
            $table->string('grado', 35);
            $table->string('parentesco_otro');
            $table->tinyInteger('tipo')->nullable();

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
        Schema::drop('pin');
    }
}
