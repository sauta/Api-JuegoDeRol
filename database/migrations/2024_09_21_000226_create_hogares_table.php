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
        Schema::create('hogares', function (Blueprint $table) {
            $table->integer('ID_HOGAR')->primary();
            $table->integer('ID_PROPIETARIO')->nullable()->comment('ID DEL PRIMER PJ QUE NACIÓ AQUÍ');
            $table->integer('CAPACIDAD_BODEGAJATE');
            $table->string('DESCRIPCION', 500)->default('Mi dulce hogar...');
            $table->integer('ID_UBICACION')->index('ubicaciones_fk_2')->comment(' DESDE ESTA UBICACIÓN EN UN RADIO A DEFINIR, EL PJ OBTIENE ESTAS BONIFICACIONES');
            $table->integer('BONIFICACION_VIDA')->default(10);
            $table->integer('BONIFICACION_MANA')->default(10);
            $table->integer('BONIFICACION_FUERZA')->default(10);
            $table->integer('BONIFICACION_INTELIGENCIA')->default(10);
            $table->integer('BONIFICACION_DESTREZA')->default(10);
            $table->integer('BONIFICACION_ARMADURA')->default(10);
            $table->integer('BONIFICACION_DANO')->default(10);
            $table->integer('BONIFICACION_DANO_MAGICO')->default(10);
            $table->integer('BONIFICACION_ALCANCE')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hogares');
    }
};
