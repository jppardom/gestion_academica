<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_alumnos');
            $table->integer('id_alumnos_user')->unsigned();
            $table->foreign('id_alumnos_user')->references("id")->on("users")->onDelete('restrict');
            $table->string('cedula_alumnos')->unique();
            $table->string('nombres_alumnos');
            $table->string('apellidos_alumnos');
            $table->string('fnacimiento_alumnos');
            $table->string('sexo_alumnos');
            $table->string('provincia_alumnos');
            $table->string('canton_alumnos');
            $table->string('ciudad_alumnos');
            $table->string('direccion_alumnos');
            $table->string('referencias_alumnos');
            $table->string('celular_alumnos');
            $table->string('fijo_alumnos')->nullable();
            $table->string('email_alumnos')->unique();
            $table->string('tipo_sangre_alumnos')->nullable();
            $table->string('colegio_alumnos');
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
        Schema::table('alumnos', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos_user']);
            $table->dropColumn(['id_alumnos_user']);
        });
        Schema::dropIfExists('alumnos');
    }
}
