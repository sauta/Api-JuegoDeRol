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
        Schema::table('hechizos', function (Blueprint $table) {
            $table->foreign(['ID_TIPO_HECHIZO'], 'TIPOS_DE_HECHIZOS_FK')->references(['ID_TIPO_HECHIZO'])->on('tipos_de_hechizos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hechizos', function (Blueprint $table) {
            $table->dropForeign('TIPOS_DE_HECHIZOS_FK');
        });
    }
};
