<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes_materia', function (Blueprint $table) {
            $table->increments('id_docentes_materia');
            $table->integer('id_docentes')->unsigned();
            $table->foreign('id_docentes')->references("id_docentes")->on("docentes")->onDelete('restrict');
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
        Schema::table('docentes_materia', function (Blueprint $table) {
            $table->dropForeign(['id_docentes']);
            $table->dropColumn(['id_docentes']);
            $table->dropForeign(['id_periodo']);
            $table->dropColumn(['id_periodo']);
            $table->dropForeign(['id_materia']);
            $table->dropColumn(['id_materia']);
        });
        Schema::dropIfExists('docentes_materia');
    }
}
