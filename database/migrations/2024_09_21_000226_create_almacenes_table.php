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
        Schema::create('almacenes', function (Blueprint $table) {
            $table->comment('EL ALMACEN SE DIVIDE LA CANTIDAD POR EL PESO DEL OBJETO Y SE ELIMINA DEL INVENTARIO, EL ALMACEN SE MULTIPLICA LA CANTIDAD POR EL PESO DEL OBJETO Y SE DEJA EN EL INVENTARIO');
            $table->integer('ID_ALMACEN')->primary();
            $table->integer('CAPACIDAD')->default(0);
            $table->integer('ID_TRANSPORTE')->nullable()->index('transportes_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacenes');
    }
};
