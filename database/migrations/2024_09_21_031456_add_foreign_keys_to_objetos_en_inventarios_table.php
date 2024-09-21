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
        Schema::table('objetos_en_inventarios', function (Blueprint $table) {
            $table->foreign(['ID_INVENTARIO'], 'INVENTARIOS_FK')->references(['ID_INVENTARIO'])->on('inventarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_8')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos_en_inventarios', function (Blueprint $table) {
            $table->dropForeign('INVENTARIOS_FK');
            $table->dropForeign('OBJETOS_FK_8');
        });
    }
};
