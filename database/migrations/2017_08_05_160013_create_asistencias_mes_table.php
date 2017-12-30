<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_mes', function (Blueprint $table) {
            $table->increments('id_mes');
            $table->string('dia_mes');
            $table->integer('estado');
            $table->integer('id_asistencias')->unsigned();
            $table->foreign('id_asistencias')->references("id_asistencias")->on("asistencias")->onDelete('restrict');
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
        Schema::table('asistencias_mes', function (Blueprint $table) {
            $table->dropForeign(['id_asistencias']);
            $table->dropColumn(['id_asistencias']);
        });
        Schema::dropIfExists('asistencias_mes');
    }
}
