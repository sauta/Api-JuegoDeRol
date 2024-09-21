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
        Schema::create('hechizos_enel_libro', function (Blueprint $table) {
            $table->comment('EL LIBRO CONTIENE MUCHOS HECHIZOS Y ABRIA QUE LEERLO DE NUEVO SI SUBES DE NIVEL PARA APRENDER UN NUEVO HECHIZO DEL LIRBO
AL MOMENTO DE LEER EL LIBRO ESTE DEBE DE TENER DENTRO DE SU HISTORIA PALABRAS CLABES PARA REEMPLAZARLAS CON EL NOMBRE DEL HECHIZO,
SI EL LECTOR LO INTENTA LEER Y NO CUMPLE CON EL NIVEL REQUERIDO, EL LECTOR NO PODRÁ LEER EL NOMBRE DEL HECHIZO POR LO TANTO NO PODRÁ APRENDERLO
SI EL LECTOR SUBE A UN NIVEL NECESARIO PARA ENTENDER EL NOMBRE DEL HECHIZO, EL LECTOR PODRA APRENDER EL HECHIZO QUE NO PUDO ANTERIORMENTE
NO SE PUEDE APRENDER DOS VECES EL MISMO HECHIZO');
            $table->integer('ID_HECHIZO_ENEL_LIBRO', true);
            $table->integer('ID_LIBRO')->index('libros_fk_1');
            $table->integer('ID_HECHIZO')->index('hechizos_fk_1');
            $table->integer('NIVEL_REQUERIDO')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hechizos_enel_libro');
    }
};
