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
        Schema::create('objetos_en_botines', function (Blueprint $table) {
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_13');
            $table->integer('ID_BOTIN')->nullable()->index('botines_fk');
            $table->integer('CANTIDAD')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos_en_botines');
    }
};
