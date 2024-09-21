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
        Schema::create('razas', function (Blueprint $table) {
            $table->comment('Razas que existen en el mundo, esta razas pueden tener algunas clases espeificas y ciertas bonificaciones de vida mana y otros');
            $table->integer('ID_RAZA')->primary();
            $table->string('NOMBRE_RAZA', 100);
            $table->integer('BONIFICACION_VIDA')->default(0);
            $table->integer('BONIFICACION_MANA')->default(0);
            $table->integer('BONIFICACION_FUERZA')->default(0);
            $table->integer('BONIFICACION_INTELIGENCIA')->default(0);
            $table->integer('BONIFICACION_DESTREZA')->default(0);
            $table->integer('BONIFICACION_ARMADURA')->default(0);
            $table->integer('BONIFICACION_DANO')->default(0);
            $table->integer('BONIFICACION_DANO_MAGICO')->default(0);
            $table->integer('BONIFICACION_ALCANCE')->default(0);
            $table->integer('BONIFICACION_PESO')->default(0);
            $table->integer('BONIFICACION_PRECIO')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('razas');
    }
};
