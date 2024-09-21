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
        Schema::table('personajes_en_equipo', function (Blueprint $table) {
            $table->foreign(['ID_EQUIPO'], 'EQUIPOS_FK')->references(['ID_EQUIPO'])->on('equipos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PERSONAJE'], 'PERSONAJES_FK_6')->references(['ID_PERSONAJE'])->on('personajes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personajes_en_equipo', function (Blueprint $table) {
            $table->dropForeign('EQUIPOS_FK');
            $table->dropForeign('PERSONAJES_FK_6');
        });
    }
};
