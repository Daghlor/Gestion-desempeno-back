<?php

// MIGRACION PARA CREAR LA TABLA ROLES DE USUARIOS CON SUS COLUMNAS Y CON SUS LLAVES FORANEAS A OTRAS TABLAS
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
        Schema::create('roles_users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('roles_users');
    }
};
