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
        Schema::table('cofres', function (Blueprint $table) {
            $table->foreign(['ID_UBICACION'], 'UBICACIONES_FK_5')->references(['ID_UBICACION'])->on('ubicaciones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cofres', function (Blueprint $table) {
            $table->dropForeign('UBICACIONES_FK_5');
        });
    }
};
