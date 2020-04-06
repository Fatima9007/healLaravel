<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terpeuta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terapeuta', function (Blueprint $table) {
            $table->idterapeuta();
            $table->string('nombre');
            $table->string('Apaterno');
            $table->string('Amaterno');
            $table->string('cedula')->unique();
            $table->string('EspecialidadFisio');
            $table->string('EspecialidadAdd');
            $table->string('clinicaLaborando');
            $table->string('telefono');
            $table->string('e-mail');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
