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
            $table->string('dpto_expdicion');
            $table->string('mpio_expdicion');
            $table->string('pmer_nombre');
            $table->string('sndo_nombres');
            $table->string('pmer_apellido');
            $table->string('sndo_apellido');
            $table->string('genero');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dpto_nacimiento')->nullable();
            $table->string('mpio_nacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('dpto_recidencia')->nullable();
            $table->string('mpio_recidencia')->nullable();
            $table->string('brio_recidencia')->nullable();
            $table->string('zona')->nullable();
            $table->tinyInteger('nivel_sisben')->nullable();
            $table->tinyInteger('estrato')->nullable();
            $table->string('eps')->nullable();
            $table->string('telefono', 35)->nullable();
            $table->enum('rh', ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB+', 'AB-']);
            $table->string('discapacidad')->nullable();
            $table->string('situacion_academica')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('historias_academicas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_estudiante')->unsigned();
            $table->string('ano');
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
