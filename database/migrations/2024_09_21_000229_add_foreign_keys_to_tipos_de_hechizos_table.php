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
        Schema::table('tipos_de_hechizos', function (Blueprint $table) {
            $table->foreign(['ID_ELEMENTO'], 'ELEMENTOS_FK')->references(['ID_ELEMENTO'])->on('elementos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipos_de_hechizos', function (Blueprint $table) {
            $table->dropForeign('ELEMENTOS_FK');
        });
    }
};
