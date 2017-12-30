<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_materia', function (Blueprint $table) {
            $table->increments('id_alumnos_materia');
            $table->date('fecha_alumnos_materia');
            $table->integer('id_alumnos')->unsigned();
            $table->foreign('id_alumnos')->references("id_alumnos")->on("alumnos")->onDelete('restrict');
            $table->integer('id_periodo')->unsigned();
            $table->foreign('id_periodo')->references("id_periodo")->on("periodo_academico")->onDelete('restrict');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references("id_materia")->on("materia")->onDelete('restrict');
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
        Schema::table('alumnos_materia', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos']);
            $table->dropColumn(['id_alumnos']);
            $table->dropForeign(['id_periodo']);
            $table->dropColumn(['id_periodo']);
            $table->dropForeign(['id_materia']);
            $table->dropColumn(['id_materia']);
        });
        Schema::dropIfExists('alumnos_materia');
 
    }
}
