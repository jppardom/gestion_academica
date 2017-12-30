<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePrefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_prefactura', function(Blueprint $table){
            $table->increments('id_detalle_prefactura');
            $table->string('detalle');
            $table->integer('creditos');
            $table->decimal('valor');
            $table->integer('id_prefactura')->unsigned();
            $table->foreign('id_prefactura')->references('id_prefactura')->on("prefactura")->onDelete('restrict');
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
         Schema::table('detalle_prefactura', function (Blueprint $table) {
            $table->dropForeign(['id_prefactura']);
            $table->dropColumn(['id_prefactura']);
        });
        Schema::dropIfExists('detalle_prefactura');
    }
}
