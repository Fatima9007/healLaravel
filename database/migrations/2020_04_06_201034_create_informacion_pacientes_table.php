<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_pacientes', function (Blueprint $table) {
            $table->bigIncrements('idpaciente');
            $table->string('nombre');
            $table->string('Apaterno');
            $table->string('Amaterno');
            $table->string('Genero');
            $table->string('Edad');
            $table->string('Peso');
            $table->string('Talla');
            $table->string('Tipo_sanguineo');
            $table->string('Nacionalidad');
            $table->string('Lugar_Nacimiento');
            $table->string('e-mail');
            $table->string('Telefono_Emergencia');
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
        Schema::dropIfExists('informacion_pacientes');
    }
}

