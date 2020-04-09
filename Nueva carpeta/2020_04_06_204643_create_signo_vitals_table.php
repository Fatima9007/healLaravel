<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignoVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signo_vitals', function (Blueprint $table) {
            $table->bigIncrements('idsignos');
            $table->string('f_cardiaca');
            $table->string('F_respiratoria');
            $table->string('L_capilar');
            $table->string('temperatura');
            $table->string('Satu_oxigeno');
            $table->string('Tencion_arterial');
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
        Schema::dropIfExists('signo_vitals');
    }
}
