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
        Schema::create('transportes', function (Blueprint $table) {
            $table->integer('ID_TRANSPORTE', true);
            $table->string('ID_OBJETO', 50)->index('objetos_fk_2');
            $table->string('NOMBRE', 100);
            $table->integer('VELOCIDAD')->default(0);
            $table->integer('CAPACIDAD_ALMACEN')->default(1);
            $table->string('DESCRIPCION', 100)->nullable();
            $table->integer('ID_TIPO_TRANSPORTE')->nullable()->index('tipo_transporte_fk_2');
            $table->integer('ID_UBICACION')->nullable()->index('ubicaciones_fk_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportes');
    }
};
