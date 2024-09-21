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
        Schema::create('tipo_de_armas', function (Blueprint $table) {
            $table->integer('ID_TIPO_ARMA')->primary();
            $table->string('TIPO_DE_ARMA', 100);
            $table->string('DESCRIPCION', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_de_armas');
    }
};
