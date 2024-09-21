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
        Schema::create('cofres', function (Blueprint $table) {
            $table->comment('EL COFRE MULTIPLICA LA CANTIDAD POR EL PESO DEL OBJETO Y SE DEJA EN INVENTARIO');
            $table->integer('ID_COFRE', true);
            $table->integer('ID_UBICACION')->nullable()->index('ubicaciones_fk_5');
            $table->timestamp('FECHA_CREACION')->nullable();
            $table->timestamp('FECHA_SAQUEO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cofres');
    }
};
