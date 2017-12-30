<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_materia', function (Blueprint $table) {
            $table->increments('id_estado_materia');
            $table->string('estado_notas');
            $table->string ('estado_asistencia');
            $table->string ('estado_materia_asistencia');
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
        Schema::table('estado_materia', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos_materia']);
            $table->dropColumn(['id_alumnos_materia']);
        });
        Schema::dropIfExists('estado_materia');
    }
}
