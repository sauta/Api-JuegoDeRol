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
        Schema::create('conocimiento', function (Blueprint $table) {
            $table->comment('EL CONOCIMIENTO SE ADQUIERE AL MOMENTO DE LEER UN LIBRO Y SE REGISTRA EL/LOS HECHIZOS APRENDIDOS SEGUN NIVEL, CLASE Y RAZA
SI EL LIBRO SE LEE DE NUEVO Y EL PERSONAJE YA APRENDIO ALGUNOS HECHIZOS DEL LIBRO, PERO EL PERSONAJE TIENE MAS NIVEL,
SE SUMARÁ A SUS CONOCIMIENTOS LOS HECHIZOS DEL LIRBO QUE NO PODIA ADQUIRIR POR FALTA DE EXPERIENCIA');
            $table->integer('ID_LIBRO')->nullable()->index('libros_fk_2');
            $table->integer('ID_HECHIZO')->nullable()->index('hechizos_fk_2');
            $table->integer('ID_PERSONAJE')->nullable()->index('personajes_fk_2');
            $table->timestamp('FECHA_APRENDIZAGE')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conocimiento');
    }
};
