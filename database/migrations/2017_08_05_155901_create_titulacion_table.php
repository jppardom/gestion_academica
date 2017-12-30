<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion', function (Blueprint $table) {
            $table->increments('id_titulacion');
            $table->string('nombre_titulacion');
            $table->string('descripcion_titulacion');
            $table->integer('valor_credito_titulacion');
            $table->integer('id_malla')->unsigned();
            $table->foreign('id_malla')->references("id_malla")->on("malla_curricular")->onDelete('restrict');
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
        Schema::table('titulacion', function (Blueprint $table) {
            $table->dropForeign(['id_malla']);
            $table->dropColumn(['id_malla']);
        });
        Schema::dropIfExists('titulacion');
    }
}
