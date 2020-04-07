<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
           
            $table->bigIncrements('idantecedente');
            $table->string('enfermedades');
            $table->string('habitos_Fami');
            $table->string('f_habitos');
            $table->string('Via_nacimiento');
            $table->string('Time_gesta');
            $table->string('Num_hermanos');
            $table->string('Note');
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
        Schema::dropIfExists('antecedentes');
    }
}
