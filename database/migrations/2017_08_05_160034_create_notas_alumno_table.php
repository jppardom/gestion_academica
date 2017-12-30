<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_alumno', function (Blueprint $table) {
            $table->increments('id_notas');
            $table->decimal('notaI_bimestre');
            $table->decimal('notaII_bimestre')->nullable();
            $table->decimal('promedio_bimestre')->nullable();
            $table->string('estado_bimestre')->nullable();
            $table->decimal('notaI_supletorio')->nullable();
            $table->decimal('notaII_supletorio')->nullable();
            $table->decimal('promedio_supletorio')->nullable();
            $table->string('estado_supletorio')->nullable();
            $table->decimal('nota_suspenso')->nullable();
            $table->string('estado')->nullable();
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
        Schema::table('notas_alumno', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos_materia']);
            $table->dropColumn(['id_alumnos_materia']);
        });
        Schema::dropIfExists('notas_alumno');
    }
}
