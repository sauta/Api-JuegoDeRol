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
        Schema::create('elementos', function (Blueprint $table) {
            $table->integer('ID_ELEMENTO')->primary();
            $table->string('ELEMENTO', 100)->comment('NORMAL Y ELEMENTOS  MAGICOS AIRE, FUEGO, TIERRA, AGUA, MADERA, VENENO, HIELO, ILUSION, CRISTAL, METAL, LUZ, ELECTRICIDAD, CURACION');
            $table->integer('ID_ELEMENTO_DEBIL')->nullable()->comment('ELEMENTO QUE CONTRARRESTA EL PODER DE DAÑO MAGICO EN CASO DE HECHIZOS DEFENCIBOS VS DE ATAQUE');
            $table->integer('ID_ELEMENTO_FUERTE')->nullable()->comment('ELEMENTO QUE NO LE AFECTA EL PODER DE DAÑO MAGICO EN CASO DE HECHIZOS DEFENCIBOS VS DE ATAQUE');
            $table->string('DESCRIPCION', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elementos');
    }
};
