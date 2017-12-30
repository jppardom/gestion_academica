<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id_pagos');
            $table->integer('id_prefactura')->unsigned();
            $table->foreign('id_prefactura')->references("id_prefactura")->on("prefactura")->onDelete('restrict');
            $table->string('referencia_pago');
            $table->string ('comprobate_img');
            $table->decimal('valor');
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
         Schema::table('pagos', function (Blueprint $table) {
            $table->dropForeign(['id_prefactura']);
            $table->dropColumn(['id_prefactura']);
        });
        Schema::dropIfExists('pagos');
    }
}
