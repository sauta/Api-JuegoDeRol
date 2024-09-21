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
        Schema::create('tipo_transporte_terreno', function (Blueprint $table) {
            $table->integer('ID_TIPO_TRANSPORTE')->index('tipo_transporte_fk_1')->comment('VOLADOR, TERRESTRE, NAVEGANTE');
            $table->integer('ID_TERRENO')->index('terreno_fk_2')->comment('CIELO, MAR, LAGO, CIUDAD, MONTAÑA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_transporte_terreno');
    }
};
