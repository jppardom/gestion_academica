<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id_asistencias');
            $table->string('anio');
            $table->string('mes');
            $table->string('estado');
            $table->integer('id_alumnos_materia')->unsigned();
            $table->foreign('id_alumnos_materia')->references("id_alumnos_materia")->on("alumnos_materia")->onDelete('restrict');
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
       Schema::table('asistencias', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos_materia']);
            $table->dropColumn(['id_alumnos_materia']);
        });
        Schema::dropIfExists('asistencias');
    }
}
