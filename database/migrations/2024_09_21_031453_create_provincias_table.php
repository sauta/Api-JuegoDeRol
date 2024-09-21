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
        Schema::create('provincias', function (Blueprint $table) {
            $table->integer('ID_PROVINCIA', true);
            $table->string('PROVINCIA', 100);
            $table->integer('CAPITAL_PROVINCIA')->nullable()->comment('ID_CIUDAD');
            $table->integer('ID_REGION')->index('region_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincias');
    }
};
