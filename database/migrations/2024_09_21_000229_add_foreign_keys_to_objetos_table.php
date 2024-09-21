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
        Schema::table('objetos', function (Blueprint $table) {
            $table->foreign(['ID_MATERIAL'], 'MATERIALES_FK')->references(['ID_MATERIAL'])->on('materiales')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('objetos', function (Blueprint $table) {
            $table->dropForeign('MATERIALES_FK');
        });
    }
};
