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
        Schema::table('personajes', function (Blueprint $table) {
            $table->foreign(['ID_ARMA_EQUIPADA'], 'ARMA_PJ_FK')->references(['ID_ARMA'])->on('armas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_ARMADURA_EQUIPADA'], 'ARMADURA_PJ_FK')->references(['ID_ARMADURA'])->on('armaduras')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CASA'], 'CASA_PJ_FK')->references(['ID_CASA'])->on('casas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CLASE'], 'CLASE_PJ_FK')->references(['ID_CLASE'])->on('clases')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_HECHIZO_EQUIPADO'], 'HECHIZO_PJ_FK')->references(['ID_HECHIZO'])->on('hechizos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_HOGAR'], 'HOGAR_PJ_FK')->references(['ID_HOGAR'])->on('hogares')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_NIVEL'], 'NIVEL_PJ_FK')->references(['ID_NIVEL'])->on('niveles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_RAZA'], 'RAZA_PJ_FK')->references(['ID_RAZA'])->on('razas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_SEXO'], 'SEXO_PJ_FK')->references(['ID_SEXO'])->on('sexos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TRANSPORTE'], 'TRANSPORTE_PJ_FK')->references(['ID_TRANSPORTE'])->on('transportes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_UBICACION'], 'UBICACION_PJ_FK')->references(['ID_UBICACION'])->on('ubicaciones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personajes', function (Blueprint $table) {
            $table->dropForeign('ARMA_PJ_FK');
            $table->dropForeign('ARMADURA_PJ_FK');
            $table->dropForeign('CASA_PJ_FK');
            $table->dropForeign('CLASE_PJ_FK');
            $table->dropForeign('HECHIZO_PJ_FK');
            $table->dropForeign('HOGAR_PJ_FK');
            $table->dropForeign('NIVEL_PJ_FK');
            $table->dropForeign('RAZA_PJ_FK');
            $table->dropForeign('SEXO_PJ_FK');
            $table->dropForeign('TRANSPORTE_PJ_FK');
            $table->dropForeign('UBICACION_PJ_FK');
        });
    }
};
