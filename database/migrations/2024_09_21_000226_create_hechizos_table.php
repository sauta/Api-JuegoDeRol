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
        Schema::create('hechizos', function (Blueprint $table) {
            $table->comment('LOS HECHIZOS SE APRENDEN LEYENDO LIBROS, TAMBIEN SE TIENE EN CUENTA EL NIVEL Y LA CLASE Y RAZA.');
            $table->integer('ID_HECHIZO')->primary();
            $table->string('NOMBRE_HECHIZO', 100);
            $table->integer('VELOCIDAD_DE_HECHIZO')->default(0);
            $table->integer('DANO_MAGICO')->default(0);
            $table->integer('ALCANCE')->default(0);
            $table->integer('COSTO_MANA')->default(0)->comment('AL UILIZAR ESTE HECHIZO SE RESTA EL MANÁ');
            $table->integer('ID_TIPO_HECHIZO')->index('tipos_de_hechizos_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hechizos');
    }
};
