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
        Schema::table('objetos_en_bodegas', function (Blueprint $table) {
            $table->foreign(['ID_BODEGA'], 'BODEGAS_FK')->references(['ID_BODEGA'])->on('bodegas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_10')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos_en_bodegas', function (Blueprint $table) {
            $table->dropForeign('BODEGAS_FK');
            $table->dropForeign('OBJETOS_FK_10');
        });
    }
};
