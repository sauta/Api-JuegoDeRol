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
        Schema::create('equipos', function (Blueprint $table) {
            $table->integer('ID_EQUIPO', true);
            $table->string('CANTO', 1200)->default('');
            $table->timestamp('FECHA_CREACION')->nullable()->useCurrent();
            $table->timestamp('FECHA_DISOLUCION')->nullable();
            $table->integer('ID_LIDER')->nullable()->index('personajes_fk_7');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
