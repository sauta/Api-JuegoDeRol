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
        Schema::table('regiones', function (Blueprint $table) {
            $table->foreign(['ID_PAIS'], 'PAIS_FK')->references(['ID_PAIS'])->on('paises')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regiones', function (Blueprint $table) {
            $table->dropForeign('PAIS_FK');
        });
    }
};
