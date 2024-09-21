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
        Schema::table('paises', function (Blueprint $table) {
            $table->foreign(['ID_MAPA'], 'MAPAS_FK')->references(['ID_MAPA'])->on('mapas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paises', function (Blueprint $table) {
            $table->dropForeign('MAPAS_FK');
        });
    }
};
