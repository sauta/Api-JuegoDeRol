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
        Schema::create('objetos_en_mochila', function (Blueprint $table) {
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_9')->comment('AQUÍ VAN LOS OBJETO QUE PUEDEN HABER DENTRO DE LA MOCHILA, ASEGURARSE DE QUE LA MISMA MOCHILA NO PUEDA CONTENER MOCHILAS');
            $table->integer('ID_MOCHILA')->nullable()->index('mochilas_fk')->comment('ID DE LA MOCHILA EN DONDE ESTA ESTE OBJETO');
            $table->integer('CANTIDAD')->nullable()->default(0)->comment('CANTIDAD DE VECES QUE SE REPITE EL OBJETO');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos_en_mochila');
    }
};
