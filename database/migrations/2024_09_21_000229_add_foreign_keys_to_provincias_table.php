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
        Schema::table('provincias', function (Blueprint $table) {
            $table->foreign(['ID_REGION'], 'REGION_FK')->references(['ID_REGION'])->on('regiones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('provincias', function (Blueprint $table) {
            $table->dropForeign('REGION_FK');
        });
    }
};
