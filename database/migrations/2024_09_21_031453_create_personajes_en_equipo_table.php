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
        Schema::create('personajes_en_equipo', function (Blueprint $table) {
            $table->integer('ID_EQUIPO', true)->index('equipos_fk');
            $table->integer('ID_PERSONAJE')->nullable()->index('personajes_fk_6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes_en_equipo');
    }
};
