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
        Schema::create('casas', function (Blueprint $table) {
            $table->integer('ID_CASA', true);
            $table->integer('ID_LIDER')->nullable();
            $table->string('DESCRIPCION', 500);
            $table->string('ESCUDO_DE_ARMAS', 500);
            $table->string('LEMA', 500);
            $table->integer('ID_UBICACION')->index('ubicaciones_fk_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casas');
    }
};
