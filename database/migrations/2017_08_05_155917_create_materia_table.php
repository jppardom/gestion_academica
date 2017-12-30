<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->increments('id_materia');
            $table->string('codigo_materia');
            $table->string('nivel_materia');
            $table->string('nombre_materia');
            $table->integer('horas_materia');
            $table->integer('creditos_materia');
            $table->decimal('nota_minina_materia');
            $table->integer('id_titulacion')->unsigned();
            $table->foreign('id_titulacion')->references("id_titulacion")->on("titulacion")->onDelete('restrict');
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
        Schema::table('materia', function (Blueprint $table) {
            $table->dropForeign(['id_titulacion']);
            $table->dropColumn(['id_titulacion']);
        });
        Schema::dropIfExists('materia');
    }
}
