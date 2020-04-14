<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('Apaterno');
            $table->string('Amaterno');
            $table->string('Especialidad');
            $table->string('EspecialidadAdd');
            $table->string('Clinica');
            $table->string('email');
            $table->string('Telefono_Emergencia');
            $table->string('foto');
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
        Schema::dropIfExists('usuarios');
    }
}
