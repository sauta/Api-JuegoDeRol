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
        Schema::create('posiones', function (Blueprint $table) {
            $table->comment('POR AHORA SOLO ABRAN POCIONES DE MANÁ Y DE VIDA, PARA NO COMPLCIAR LAS COALESCE_SQ');
            $table->integer('ID_POSION')->primary();
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_6');
            $table->string('NOMBRE_POSION', 100)->default('Posión Eterea');
            $table->integer('NIVEL_REQUERIDO')->nullable();
            $table->integer('REGENERA_MANA')->default(0);
            $table->integer('REGENERA_VIDA')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posiones');
    }
};
