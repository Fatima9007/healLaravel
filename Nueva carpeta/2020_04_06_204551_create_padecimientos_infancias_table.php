<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadecimientosInfanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padecimientos_infancias', function (Blueprint $table) {
            $table->bigIncrements('idpade_infan');
            $table->string('Mecanismo_Lesion');
            $table->string('Sintoma');
            $table->string('Incremento_Sintoma');
            $table->string('Disminucion_Sintoma');
            $table->string('Nivel_dolor_actual');
            $table->string('dolor_semanal');
            $table->string('enfermedad_infancia');
            $table->string('descripcion');
            $table->string('tratamiento');
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
        Schema::dropIfExists('padecimientos_infancias');
    }
}
