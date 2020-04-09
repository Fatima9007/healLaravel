<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlergiaVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergia__vacunas', function (Blueprint $table) {
            
            $table->bigIncrements('idvacuna');
            $table->string('nom_vacuna');
            $table->string('descripcion');
            $table->string('nom_alergia');
            $table->string('descrip_alergia');
            $table->string('Tratamiento_alergia');
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
        Schema::dropIfExists('alergia__vacunas');
    }
}
