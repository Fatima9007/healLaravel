<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario1s', function (Blueprint $table) {
            $table->bigIncrements('idusuario');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('Apaterno');
            $table->string('Especialidad');
            $table->string('EspecialidadAdd');
            $table->string('Clinica');
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
        Schema::dropIfExists('usuario1s');
    }
}
