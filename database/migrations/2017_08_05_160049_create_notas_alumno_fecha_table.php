<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasAlumnoFechaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_alumno_fecha', function (Blueprint $table) {
            $table->increments('id_notas_fecha');
            $table->date('notaI_bimestre');
            $table->date('notaII_bimestre')->nullable();
            $table->date('notaI_supletorio')->nullable();
            $table->date('notaII_supletorio')->nullable();
            $table->date('nota_suspenso');      
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
        Schema::dropIfExists('notas_alumno_fecha');
    }
}
