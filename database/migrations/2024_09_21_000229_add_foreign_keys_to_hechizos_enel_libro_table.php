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
        Schema::table('hechizos_enel_libro', function (Blueprint $table) {
            $table->foreign(['ID_HECHIZO'], 'HECHIZOS_FK_1')->references(['ID_HECHIZO'])->on('hechizos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_LIBRO'], 'LIBROS_FK_1')->references(['ID_LIBRO'])->on('libros')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hechizos_enel_libro', function (Blueprint $table) {
            $table->dropForeign('HECHIZOS_FK_1');
            $table->dropForeign('LIBROS_FK_1');
        });
    }
};
