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
        Schema::create('tipos_de_hechizos', function (Blueprint $table) {
            $table->integer('ID_TIPO_HECHIZO')->primary();
            $table->string('TIPOS_DE_HECHIZO', 100);
            $table->string('DESCRIPCION', 100)->nullable();
            $table->integer('ID_ELEMENTO')->index('elementos_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_de_hechizos');
    }
};
