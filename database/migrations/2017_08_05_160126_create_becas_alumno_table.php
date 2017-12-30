<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBecasAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas_alumno', function (Blueprint $table) {
            $table->increments('id_becas');
            $table->string('tipo_beca');
            $table->integer('procentaje');
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
         Schema::table('becas_alumno', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos_materia']);
            $table->dropColumn(['id_alumnos_materia']);
        });
        Schema::dropIfExists('becas_alumno');
    }
}
