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
        Schema::table('hechizo_usable_por', function (Blueprint $table) {
            $table->foreign(['ID_COMPATIBILIDAD'], 'COMPATIBILIDADES_FK_2')->references(['ID_COMPATIBILIDAD'])->on('compatibilidades')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_HECHIZO'], 'TIPO_HECHIZOS_FK')->references(['ID_TIPO_HECHIZO'])->on('tipos_de_hechizos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hechizo_usable_por', function (Blueprint $table) {
            $table->dropForeign('COMPATIBILIDADES_FK_2');
            $table->dropForeign('TIPO_HECHIZOS_FK');
        });
    }
};
