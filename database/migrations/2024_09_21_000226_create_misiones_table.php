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
        Schema::create('misiones', function (Blueprint $table) {
            $table->comment('SE SUMA LA MISION POR EL PESO DEL OBJETO Y SE DEJA EN INVENTARIO');
            $table->integer('ID_MISION')->primary();
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_7')->comment('MISIONES SON EN PAPEL Y PESAN Y TIENE UN PRECIO');
            $table->string('MISION', 300)->comment(' TITULO DE LA MISION');
            $table->integer('EXPERIENCIA')->nullable()->comment(' LA EXPERIENCIA ES REFERENTE, SI ES LA MISMA MISIÓN CON MAYORDIFICULTAD');
            $table->string('DESCRIPCION', 1000);
            $table->integer('DIFICULTAD')->comment(' LA DIFICULTAD AHUMENTA LA EXPERIENCIA');
            $table->integer('ID_ENEMIGO')->nullable()->comment('EL ENEMIGO PUEDE EXISTIR O NO, SI EL ENEMIGO ESTA MUERTO NO SE PUEDE VOLVER A REALIZAR');
            $table->integer('ID_VICTIMA')->nullable()->comment('LA VICTIMA PUEDE EXISTIR O NO');
            $table->integer('ID_INICIADOR')->nullable()->comment('EL INICIADOR ES QUIEN COMIENZA LA MISIÓN, O LIDER DEL GRUPO');
            $table->integer('ID_UBICACION')->index('ubicaciones_fk_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('misiones');
    }
};
