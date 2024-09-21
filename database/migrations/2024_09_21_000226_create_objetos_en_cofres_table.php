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
        Schema::create('objetos_en_cofres', function (Blueprint $table) {
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_12');
            $table->integer('ID_COFRE')->nullable()->index('cofres_fk');
            $table->integer('CANTIDAD')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos_en_cofres');
    }
};
