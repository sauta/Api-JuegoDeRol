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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->comment('LA BODEGA SE DIVIDE LA CANTIDAD POR EL PESO DEL OBJETO Y SE ELIMINA DEL INVENTARIO 
LA BODEGA SE MULTIPLICA LA CANTIDAD POR EL PESO DEL OBJETO Y SE DEJA EN EL INVENTARIO');
            $table->integer('ID_BODEGA')->primary();
            $table->integer('ID_HOGAR')->nullable()->index('hogares_fk');
            $table->integer('CAPACIDAD')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas');
    }
};
