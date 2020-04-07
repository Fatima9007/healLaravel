<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos', function (Blueprint $table) {
            $table->bigIncrements('idhabito');
            $table->string('fumar');
            $table->string('frecuencia_fumar');
            $table->string('inicio');
            $table->string('alcohol');
            $table->string('Cantidad_alcohol');
            $table->string('otros');
            $table->string('cantidad_agua');
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
        Schema::dropIfExists('habitos');
    }
}
