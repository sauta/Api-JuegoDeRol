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
        Schema::table('conocimiento', function (Blueprint $table) {
            $table->foreign(['ID_HECHIZO'], 'HECHIZOS_FK_2')->references(['ID_HECHIZO'])->on('hechizos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_LIBRO'], 'LIBROS_FK_2')->references(['ID_LIBRO'])->on('libros')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PERSONAJE'], 'PERSONAJES_FK_2')->references(['ID_PERSONAJE'])->on('personajes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conocimiento', function (Blueprint $table) {
            $table->dropForeign('HECHIZOS_FK_2');
            $table->dropForeign('LIBROS_FK_2');
            $table->dropForeign('PERSONAJES_FK_2');
        });
    }
};
