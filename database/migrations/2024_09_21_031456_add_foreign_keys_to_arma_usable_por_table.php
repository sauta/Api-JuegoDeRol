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
        Schema::table('arma_usable_por', function (Blueprint $table) {
            $table->foreign(['ID_COMPATIBILIDAD'], 'COMPATIBILIDADES_FK_1')->references(['ID_COMPATIBILIDAD'])->on('compatibilidades')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_ARMA'], 'TIPO_ARMAS_FK_3')->references(['ID_TIPO_ARMA'])->on('tipo_de_armas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('arma_usable_por', function (Blueprint $table) {
            $table->dropForeign('COMPATIBILIDADES_FK_1');
            $table->dropForeign('TIPO_ARMAS_FK_3');
        });
    }
};
