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
        Schema::create('compatibilidades', function (Blueprint $table) {
            $table->comment('tabla de compatibilidades para las clases y razasa, la gracias de esta tabla es que se puede utilizar para las armas armaduras y otros objetos para que no todas la razas o clases puedan utilizar las mismas combinaciones de armas');
            $table->integer('ID_COMPATIBILIDAD')->primary();
            $table->integer('ID_CLASE')->index('clase_fk');
            $table->integer('ID_RAZA')->index('razas_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compatibilidades');
    }
};
