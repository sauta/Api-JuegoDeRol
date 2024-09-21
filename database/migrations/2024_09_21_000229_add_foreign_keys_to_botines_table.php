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
        Schema::table('botines', function (Blueprint $table) {
            $table->foreign(['ID_MISION'], 'MISIONES_FK_1')->references(['ID_MISION'])->on('misiones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('botines', function (Blueprint $table) {
            $table->dropForeign('MISIONES_FK_1');
        });
    }
};
