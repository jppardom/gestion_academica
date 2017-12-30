<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id_docentes');
            $table->integer('id_docentes_user')->unsigned();
            $table->foreign('id_docentes_user')->references("id")->on("users")->onDelete('restrict');
            $table->string('cedula_docentes')->unique();
            $table->string('nombres_docentes');
            $table->string('apellido_docentes');
            $table->string('fnacimiento_docentes');
            $table->string('sexo_docentes');
            $table->string('provincia_docentes');
            $table->string('canton_docentes');
            $table->string('ciudad_docentes');
            $table->string('direccion_docentes');
            $table->string('referencias_docentes');
            $table->string('celular_docentes');
            $table->string('fijo_docentes')->nullable();
            $table->string('email_docentes');
            $table->string('tipo_sangre_docentes');
            $table->string('titulo_docentes');
            $table->string('especialidad_docentes');
            $table->string('estado_docentes')->default(1);;
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
         Schema::table('docentes', function (Blueprint $table) {
            $table->dropForeign(['id_docentes_user']);
            $table->dropColumn(['id_docentes_user']);
        });
         Schema::dropIfExists('docentes');

    }
}
