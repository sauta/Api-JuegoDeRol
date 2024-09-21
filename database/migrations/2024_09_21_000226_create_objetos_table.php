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
        Schema::create('objetos', function (Blueprint $table) {
            $table->comment('Tabla que contiene los objetos en el juego
Los objetos pueden ser vendidos y añadidos a un inventario, almacén, mochila o bodega
Si el inventario está lleno, no se puede agregar el objeto');
            $table->string('ID_OBJETO', 50)->primary()->comment('Identificador único para el objeto');
            $table->string('NOMBRE_OBJETO', 1000)->default('Manos')->comment('Nombre del objeto. Ej: Espada, Mochila, Armadura');
            $table->integer('PRECIO')->default(0)->comment('Precio del objeto en monedas de oro');
            $table->integer('PESO')->default(0)->comment('Peso del objeto en gramos');
            $table->string('TIPO_OBJETO', 300)->comment('Tipo de objeto. Ej: Arma, Mochila, Armadura, Libro, Misión, Mapa, Poción');
            $table->integer('ID_MATERIAL')->index('materiales_fk')->comment('Material principal con el que está construido el objeto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos');
    }
};
