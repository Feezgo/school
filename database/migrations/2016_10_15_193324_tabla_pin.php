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
            $table->string('num_identidad_alumno', 60);
            $table->string('email_acudiente', 60);
            $table->string('telefono_acudiente', 60);
            $table->string('grado_aspira', 35);
            $table->string('tipo_estudiante', 35);
            $table->string('pin', 100);

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
