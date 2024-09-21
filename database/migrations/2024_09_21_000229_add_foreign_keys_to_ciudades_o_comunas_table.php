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
        Schema::table('ciudades_o_comunas', function (Blueprint $table) {
            $table->foreign(['ID_PROVINCIA'], 'PROVINCIA_FK')->references(['ID_PROVINCIA'])->on('provincias')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TERRENO'], 'TERRENO_FK_1')->references(['ID_TERRENO'])->on('terrenos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ciudades_o_comunas', function (Blueprint $table) {
            $table->dropForeign('PROVINCIA_FK');
            $table->dropForeign('TERRENO_FK_1');
        });
    }
};
