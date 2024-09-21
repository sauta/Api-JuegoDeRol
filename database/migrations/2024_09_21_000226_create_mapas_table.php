<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mapas', function (Blueprint $table) {
            $table->comment('Tabla que define los mapas del mundo del juego
 Los mapas pueden ser almacenados como objetos en el inventario, almacén, mochila o bodega
 Los mapas incluyen la historia del mundo donde se desarrolla el juego');
            $table->integer('ID_MAPA')->primary()->comment('Identificador único para el mapa');
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_1')->comment('Referencia al objeto que es el mapa en el inventario');
            $table->string('MAPA', 100)->comment('Nombre del mapa o lugar en el mundo del juego');
            $table->string('HISTORIA_DEL_MUNDO', 2000)->default('No hay Historia')->comment('Historia o contexto del mundo representado por el mapa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapas');
    }
};
