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
        Schema::create('niveles', function (Blueprint $table) {
            $table->integer('ID_NIVEL')->primary();
            $table->string('NIVEL', 100);
            $table->integer('EXPERIENCIA_REQUERIDA')->default(0)->comment('EXPERIENCIA REQUERIDA PARA PASAR COMPLETAR EL NIVEL');
            $table->string('DESCRIPCION', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles');
    }
};
