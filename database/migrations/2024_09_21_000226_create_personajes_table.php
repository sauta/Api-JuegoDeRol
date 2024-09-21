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
        Schema::create('personajes', function (Blueprint $table) {
            $table->integer('ID_PERSONAJE')->primary();
            $table->string('NOMBRE', 100)->default('Sin nombre');
            $table->string('NOMBRE_COMPLETO', 500)->default('Hijo de...');
            $table->integer('VIDA')->default(100);
            $table->integer('MANA')->default(100);
            $table->integer('VIDA_MAX')->default(100);
            $table->integer('MANA_MAX')->default(100);
            $table->integer('FUERZA')->default(1);
            $table->integer('INTELIGENCIA')->default(1);
            $table->integer('DESTREZA')->default(1);
            $table->integer('EDAD')->default(0);
            $table->integer('EXPERIENCIA')->default(0);
            $table->integer('ORO')->default(0);
            $table->timestamp('FECHA_NACIMIENTO')->useCurrent();
            $table->timestamp('FECHA_POSTMORTE')->nullable();
            $table->integer('ID_CASA')->nullable()->index('casa_pj_fk');
            $table->integer('ID_HOGAR')->nullable()->index('hogar_pj_fk');
            $table->integer('ID_UBICACION')->nullable()->index('ubicacion_pj_fk');
            $table->integer('ID_RAZA')->nullable()->index('raza_pj_fk');
            $table->integer('ID_CLASE')->nullable()->index('clase_pj_fk');
            $table->integer('ID_SEXO')->default(3)->index('sexo_pj_fk');
            $table->integer('ID_NIVEL')->default(1)->index('nivel_pj_fk');
            $table->integer('ID_ARMADURA_EQUIPADA')->default(1)->index('armadura_pj_fk');
            $table->integer('ID_ARMA_EQUIPADA')->default(0)->index('arma_pj_fk');
            $table->integer('ID_HECHIZO_EQUIPADO')->default(0)->index('hechizo_pj_fk');
            $table->integer('ID_PERSONAJE_PADRE')->default(0);
            $table->integer('ID_PERSONAJE_MADRE')->default(0);
            $table->integer('ID_PERSONAJE_PAREJA')->nullable();
            $table->integer('ID_MOCHILA_EQUIPADA')->nullable();
            $table->integer('ID_INVENTARIO_PERSONAJE')->nullable();
            $table->integer('ID_TRANSPORTE')->nullable()->index('transporte_pj_fk')->comment('SI ES DISTINTO A NULL EL PERSONAJE ESTÁ EN UN TRANSPORTE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
