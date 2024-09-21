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
        Schema::create('botines', function (Blueprint $table) {
            $table->comment('EL BOTIN SE MULTIPLICA LA CANTIDAD POR EL PESO DEL OBJETO Y SE DEJA EN EL INVENTARIO');
            $table->integer('ID_BOTIN', true);
            $table->integer('ID_MISION')->nullable()->index('misiones_fk_1');
            $table->timestamp('FECHA_SAQUEO')->nullable();
            $table->string('ESTADO', 100)->nullable()->comment('PARA SABER SI EL BOTÍN ESTA SAQUEADO');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botines');
    }
};
