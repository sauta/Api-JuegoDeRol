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
        Schema::table('armas', function (Blueprint $table) {
            $table->foreign(['ID_OBJETO'], 'OBJETOS_FK_4')->references(['ID_OBJETO'])->on('objetos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_ARMA'], 'TIPO_ARMAS_FK_1')->references(['ID_TIPO_ARMA'])->on('tipo_de_armas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('armas', function (Blueprint $table) {
            $table->dropForeign('OBJETOS_FK_4');
            $table->dropForeign('TIPO_ARMAS_FK_1');
        });
    }
};
