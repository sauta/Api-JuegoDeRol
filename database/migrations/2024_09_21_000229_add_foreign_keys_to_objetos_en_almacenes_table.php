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
        Schema::table('objetos_en_almacenes', function (Blueprint $table) {
            $table->foreign(['ID_ALMACEN'], 'ALMACENES_FK')->references(['ID_ALMACEN'])->on('almacenes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_11')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos_en_almacenes', function (Blueprint $table) {
            $table->dropForeign('ALMACENES_FK');
            $table->dropForeign('OBJETOS_FK_11');
        });
    }
};
