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
        Schema::create('paises', function (Blueprint $table) {
            $table->integer('ID_PAIS')->primary();
            $table->integer('ID_REY')->nullable();
            $table->string('PAIS', 100);
            $table->string('HIMNO_NACIONAL', 2000);
            $table->integer('ID_MAPA')->nullable()->index('mapas_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paises');
    }
};
