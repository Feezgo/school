<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFamiliares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('familiares', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('pmer_nombre');
            $table->string('sndo_nombres');
            $table->string('pmer_apellido');
            $table->string('sndo_apellido');
            $table->string('identificacion', 35);
            $table->string('ocupacion', 60);
            $table->string('empresa', 60);
            $table->string('telefono', 35);
            $table->string('celular', 35);
            $table->enum('parentesco', ['padre', 'madre', 'abuelo', 'tio', 'hermano', 'otro']);
            $table->string('parentesco_otro');

            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('estudiantes_familiares', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_familiar')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->boolean('acudiente')->default(0)->nullable();

            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->foreign('id_familiar')->references('id')->on('familiares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiantes_familiares', function(Blueprint $table)
        {
            $table->dropForeign(['id_familiar']);
            $table->dropForeign(['id_estudiante']);
        });

        Schema::drop('estudiantes_familiares');
        Schema::drop('familiares');
    }
}
