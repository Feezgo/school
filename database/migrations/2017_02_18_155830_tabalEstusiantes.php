<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabalEstusiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('estudiantes2017', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id')->on('grado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiantes2017');
    }
}
