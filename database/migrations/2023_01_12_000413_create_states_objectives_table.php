<?php

// MIGRACION PARA CREAR LA TABLA ESTADOS DE OBJETIVOS CON SUS COLUMNAS
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states_objectives', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('description', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states_objectives');
    }
};
