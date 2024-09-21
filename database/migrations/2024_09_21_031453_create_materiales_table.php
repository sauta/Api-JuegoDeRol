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
        Schema::create('materiales', function (Blueprint $table) {
            $table->integer('ID_MATERIAL', true)->comment('Identificador único para los materiales');
            $table->string('MATERIAL', 100)->default('Aire')->comment('Nombre del material. Ej: Metal, Acero Valirio, Bronce, Bronce Celestial, Oro Imper');
            $table->integer('ID_MATERIAL_DEBIL')->default(0)->comment('Material que contrarresta el poder de daño en caso de armas o armaduras defensivas vs de ataque');
            $table->integer('ID_MATERIAL_FUERTE')->default(0)->comment('Material que es resistente y contrarresta el poder de daño en caso de armas o armaduras defensivas vs de ataque');
            $table->integer('ID_ELEMENTO_DEBIL')->nullable()->default(0)->comment('Elemento que debilita el material en caso de hechizos defensivos vs de ataque');
            $table->integer('ID_ELEMENTO_FUERTE')->nullable()->default(0)->comment('Elemento que refuerza el material, no afectado por el daño mágico en caso de hechizos defensivos vs de ataque');
            $table->string('DESCRIPCION', 100)->nullable()->comment('Descripción adicional o histórica del material');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
