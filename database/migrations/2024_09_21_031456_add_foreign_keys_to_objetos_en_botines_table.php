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
        Schema::table('objetos_en_botines', function (Blueprint $table) {
            $table->foreign(['ID_BOTIN'], 'BOTINES_FK')->references(['ID_BOTIN'])->on('botines')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_13')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos_en_botines', function (Blueprint $table) {
            $table->dropForeign('BOTINES_FK');
            $table->dropForeign('OBJETOS_FK_13');
        });
    }
};
