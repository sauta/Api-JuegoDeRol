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
        Schema::table('transportes', function (Blueprint $table) {
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_2')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_TRANSPORTE'], 'TIPO_TRANSPORTE_FK_2')->references(['ID_TIPO_TRANSPORTE'])->on('tipos_de_transporte')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_UBICACION'], 'UBICACIONES_FK_1')->references(['ID_UBICACION'])->on('ubicaciones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transportes', function (Blueprint $table) {
            $table->dropForeign('OBJETOS_FK_2');
            $table->dropForeign('TIPO_TRANSPORTE_FK_2');
            $table->dropForeign('UBICACIONES_FK_1');
        });
    }
};
