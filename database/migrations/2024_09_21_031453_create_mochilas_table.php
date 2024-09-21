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
        Schema::create('mochilas', function (Blueprint $table) {
            $table->comment('LA MOCHILA SE SUMA LA CAPACIDAD DE CARGA DEL PERSONAEJE');
            $table->integer('ID_MOCHILA', true);
            $table->string('NOMBRE_MOCHILA', 100)->nullable();
            $table->integer('ID_PERSONAJE')->nullable()->index('personajes_fk_4');
            $table->integer('CAPACIDAD')->default(0);
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_14')->comment('LA MOCHILA ES UN OBJETO POR LO QUE TIENE SU ID OBJETO PROPIA, SE PUEDE ALMACENAR SOLO SI NO TIENE OBJETOS');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mochilas');
    }
};
