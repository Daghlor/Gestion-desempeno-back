<?php

// MIGRACION PARA AGREGAR COLUMNAS A LA TABLA OBJETIVOS ESTRATEGICOS YA CREADA
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
        Schema::table('objectives_strategics', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id')->nullable()->after('areas_id');
            $table->foreign('state_id')->references('id')->on('states');
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
};
