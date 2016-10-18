<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaDepartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('departamento', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('departamento');
            $table->softDeletes();
        });

        Schema::create('municipio', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_departamento')->unsigned();
            $table->string('municipio');
            
 

            $table->foreign('id_departamento')->references('id')->on('departamento')->onDelete('cascade');
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
        Schema::table('municipio', function(Blueprint $table)
        {
            $table->dropForeign(['id_departamento']);
        });

        Schema::drop('municipio');
        Schema::drop('departamento');
    }
}
