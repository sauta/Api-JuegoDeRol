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
        Schema::table('mapas', function (Blueprint $table) {
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_1')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mapas', function (Blueprint $table) {
            $table->dropForeign('OBJETOS_FK_1');
        });
    }
};
