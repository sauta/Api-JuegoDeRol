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
        Schema::create('libros', function (Blueprint $table) {
            $table->comment('LOS LIBROS SON OBJETOS QUE SE PUEDEN LLEVAR EN EL INVENTARIO, CONTIENEN HECHIZOS Y UNA HISTORIA QUE EXPLICA COMO REALIZAR EL HECHIZO');
            $table->integer('ID_LIBRO', true);
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_3');
            $table->string('TITULO', 100)->default('');
            $table->string('HISTORIA', 2000)->default('');
            $table->string('AUTOR', 100)->default('ANONIMO')->comment('ID DE ALGUN PERSONAJE');
            $table->integer('ID_AUTOR')->nullable()->comment('ID DE ALGUN PERSONAJE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
