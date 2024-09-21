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
        Schema::create('arma_usable_por', function (Blueprint $table) {
            $table->integer('ID_COMPATIBILIDAD')->index('compatibilidades_fk_1');
            $table->integer('ID_TIPO_ARMA')->nullable()->index('tipo_armas_fk_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arma_usable_por');
    }
};
