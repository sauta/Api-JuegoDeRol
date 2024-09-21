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
        Schema::table('objetos_en_mochila', function (Blueprint $table) {
            $table->foreign(['ID_MOCHILA'], 'MOCHILAS_FK')->references(['ID_MOCHILA'])->on('mochilas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_9')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos_en_mochila', function (Blueprint $table) {
            $table->dropForeign('MOCHILAS_FK');
            $table->dropForeign('OBJETOS_FK_9');
        });
    }
};
