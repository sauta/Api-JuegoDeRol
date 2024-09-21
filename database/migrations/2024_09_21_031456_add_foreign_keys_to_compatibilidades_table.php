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
        Schema::table('compatibilidades', function (Blueprint $table) {
            $table->foreign(['ID_CLASE'], 'CLASE_FK')->references(['ID_CLASE'])->on('clases')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_RAZA'], 'RAZAS_FK')->references(['ID_RAZA'])->on('razas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('compatibilidades', function (Blueprint $table) {
            $table->dropForeign('CLASE_FK');
            $table->dropForeign('RAZAS_FK');
        });
    }
};
