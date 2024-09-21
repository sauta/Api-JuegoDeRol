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
        Schema::table('misiones', function (Blueprint $table) {
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_7')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_UBICACION'], 'UBICACIONES_FK_4')->references(['ID_UBICACION'])->on('ubicaciones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('misiones', function (Blueprint $table) {
            $table->dropForeign('OBJETOS_FK_7');
            $table->dropForeign('UBICACIONES_FK_4');
        });
    }
};
