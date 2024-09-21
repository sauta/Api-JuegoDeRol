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
        Schema::create('misiones_en_curso', function (Blueprint $table) {
            $table->comment('LA MISION EN CURSO SE PUEDE VER QUE PERSONAJES LA ESTAN REALIZANDO AL MISMO TIEMPO Y PUEDEN COLABORAR,
 SI UN PERSONAJE ES TACHADO COMO ENEMIGO, LA MISION NO TERMINARPA HASTA QUE MUERA
 EL PERSONAJE TACHADO COMO ENEMIGO, SE AGREGARA A LA MISIONES_EN_CURSO Y SUS ENEMIGOS SERAN QUIENES INICIARON LA MISIÓN,
 Y SI EL LIDER ESTA ENUN GRUPO ESE GRUPO SERÁ SU ENEMIGO');
            $table->integer('ID_MISION')->index('misiones_fk_2');
            $table->integer('ID_PERSONAJE')->index('personajes_fk_1');
            $table->timestamp('FECHA_INICIO_MISION')->nullable()->useCurrent();
            $table->timestamp('FECHA_TERMINO_MISION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('misiones_en_curso');
    }
};
