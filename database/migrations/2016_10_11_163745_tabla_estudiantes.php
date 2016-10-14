<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->enum('tipo_documento', ['nuip', 'nip', 'cc'])->nullable();
            $table->string('documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('lugar_nacimiento')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('localidad')->nullable();
            $table->string('barrio')->nullable();
            $table->tinyInteger('estrato')->nullable();
            $table->string('telefono', 35)->nullable();
            $table->enum('rh', ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB+', 'AB-']);
            $table->string('eps')->nullable();
            $table->string('discapacidad')->nullable();
            $table->tinyInteger('nivel_sisben')->nullable();
            $table->integer('puntaje_sisben')->nullable();
            $table->enum('tipo', ['nuevo', 'antiguo']);
            $table->text('pin');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('historias_academicas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_estudiante')->unsigned();
            $table->string('institucion');
            $table->enum('grado', ['pre', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11']);
            $table->enum('caracter', ['P', 'D']);
            
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historias_academicas', function(Blueprint $table)
        {
            $table->dropForeign(['id_estudiante']);
        });

        Schema::drop('historias_academicas');
        Schema::drop('estudiantes');
    }
}
