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
        Schema::create('hechizo_usable_por', function (Blueprint $table) {
            $table->integer('ID_COMPATIBILIDAD')->index('compatibilidades_fk_2');
            $table->integer('ID_TIPO_HECHIZO')->nullable()->index('tipo_hechizos_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hechizo_usable_por');
    }
};
