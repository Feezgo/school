<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::create('grado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado');
            $table->softDeletes();
        });

         Schema::table('matricula', function ($table) {
            $table->dropColumn(['grado']);
        });

         Schema::table('matricula', function ($table) {
            $table->integer('grado')->unsigned();
            $table->foreign('grado')->references('id')->on('grado');
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
        
         Schema::table('matricula', function ($table) {
            $table->dropForeign('matricula_grado_foreign');
            $table->dropColumn('grado');
        });
         
        Schema::table('matricula', function ($table) {
            $table->integer('grado');
        });

        Schema::drop('grado');
    }
}
