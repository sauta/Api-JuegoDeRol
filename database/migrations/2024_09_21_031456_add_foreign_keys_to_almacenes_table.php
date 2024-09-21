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
        Schema::table('almacenes', function (Blueprint $table) {
            $table->foreign(['ID_TRANSPORTE'], 'TRANSPORTES_FK')->references(['ID_TRANSPORTE'])->on('transportes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('almacenes', function (Blueprint $table) {
            $table->dropForeign('TRANSPORTES_FK');
        });
    }
};
