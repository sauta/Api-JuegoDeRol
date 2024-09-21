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
        Schema::create('terrenos', function (Blueprint $table) {
            $table->integer('ID_TERRENO')->primary();
            $table->string('TERRENO', 100)->comment('CIELO, MAR, LAGO, CIUDAD, MONTAÑA');
            $table->string('DESCRIPCION', 100)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terrenos');
    }
};
