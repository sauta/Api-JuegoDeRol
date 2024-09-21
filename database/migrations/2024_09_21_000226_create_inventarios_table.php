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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->comment('EL INVENTARIO ES LA CAPACIDAD DE CARGA DEL PERSONAJE');
            $table->integer('ID_INVENTARIO')->primary();
            $table->integer('CAPACIDAD_CARGA')->default(20);
            $table->integer('ID_PERSONAJE')->nullable()->index('personajes_fk_5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
