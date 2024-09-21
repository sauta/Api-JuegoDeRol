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
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->integer('ID_UBICACION', true);
            $table->string('CALLE', 200);
            $table->integer('NUMERO');
            $table->integer('POSTAL')->nullable();
            $table->integer('ID_CIUDAD')->index('ciudad_fk');
            $table->string('REFERENCIA', 100)->nullable();
            $table->string('DESCRIPCION_TERRENO', 500)->default('');
            $table->decimal('COORDENADAS_X', 10, 8)->nullable()->default(-33.45960781);
            $table->decimal('COORDENADAS_Y', 10, 8)->nullable()->default(-70.65438954);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicaciones');
    }
};
