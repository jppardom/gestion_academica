<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefactura', function (Blueprint $table) {
            $table->increments('id_prefactura');
            $table->integer('id_alumnos')->unsigned();
            $table->foreign('id_alumnos')->references("id_alumnos")->on("alumnos")->onDelete('restrict');
            $table->decimal('subtotal_prefactura');
            $table->string('becas');//porcentaje
            $table->decimal('total_prefactura');
            $table->integer('id_periodo_academico')->unsigned();
            $table->foreign('id_periodo_academico')->references('id_periodo')->on("periodo_academico")->onDelete('restrict');
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
         Schema::table('prefactura', function (Blueprint $table) {
            $table->dropForeign(['id_alumnos']);
            $table->dropColumn(['id_alumnos']);
            $table->dropForeign(['id_periodo_academico']);
            $table->dropColumn(['id_periodo_academico']);
        });
        Schema::dropIfExists('prefactura');
    }
}
