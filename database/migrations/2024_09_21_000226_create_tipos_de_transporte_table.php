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
        Schema::create('tipos_de_transporte', function (Blueprint $table) {
            $table->integer('ID_TIPO_TRANSPORTE')->primary();
            $table->string('TIPO', 100)->comment('VOLADOR, TERRESTRE, NAVEGANTE');
            $table->string('DESCRIPCION', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_de_transporte');
    }
};
