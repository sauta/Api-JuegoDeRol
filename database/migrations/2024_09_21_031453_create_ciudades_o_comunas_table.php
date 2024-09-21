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
        Schema::create('ciudades_o_comunas', function (Blueprint $table) {
            $table->integer('ID_CIUDAD', true);
            $table->string('COMUNA_CIUDAD', 100);
            $table->integer('ID_ALCALDE')->nullable()->comment('ID PERSONAJE QUE ES ALCALDE');
            $table->integer('ID_PROVINCIA')->index('provincia_fk');
            $table->integer('ID_TERRENO')->index('terreno_fk_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades_o_comunas');
    }
};
