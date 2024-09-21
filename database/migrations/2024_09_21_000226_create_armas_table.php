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
        Schema::create('armas', function (Blueprint $table) {
            $table->comment('EL ARMA REALIZA DAÑO FISICO, Y SI ESTA CONTRUIDO CON ALGUN MATERIAL QUE SEA FUERTE CONTRA UN ELEMENTO, EL DAÑO SE CONVIERTE TAMBIEN EN DAÑO MAGICO
LAS ARMAS DE ALCANCE UTILIZAN ARMAS TIPO ARROJADISAS
LAS ARMAS TIPO CUERPO A CUERTPO PUEDEN PENETRAR LA DEFENSA, DESPRECIANDO UN PORCENTAJE DE LA DEFENSA, PERO NUNCA SERPA 0');
            $table->integer('ID_ARMA')->primary();
            $table->string('NOMBRE_ARMA', 100)->default('PUÑOS');
            $table->integer('DANO')->default(1);
            $table->integer('ID_ARMA_CONSUMIBLE')->nullable();
            $table->integer('CARGA')->nullable()->comment(' LAS CARGAS DEL ARMA ES SOLO PARA LAS ARMAS DE TIPO LARGO ALCANCE O LANZA HECHIZO');
            $table->integer('NIVEL_REQUERIDO')->nullable()->comment(' NIVEL REQUERIDO DEL JUGADOR PARA PORTAR EL ARMA');
            $table->integer('ALCANCE')->default(0)->comment(' DISTANCIA QUE ATACA EL ARMA');
            $table->integer('VELOCIDAD_DE_ATAQUE')->default(0)->comment('TURNOS O TIEMPO QUE EL ARMA SE DEMORA EN ATACAR');
            $table->integer('ID_TIPO_ARMA')->index('tipo_armas_fk_1')->comment(' TIPO DE ARMA');
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_4')->comment(' ID DEL OBJETO DEL ARMA');
            $table->integer('BONIFICACION_VIDA')->default(0)->comment(' hay armas que dan bonificación de vida');
            $table->integer('BONIFICACION_MANA')->default(0)->comment(' las armas tipo baston magico dan bonificación de mana');
            $table->integer('BONIFICACION_FUERZA')->default(0)->comment(' las armas de la clase guerrero dan bonificación de fuerza');
            $table->integer('BONIFICACION_DANO')->default(0)->comment(' las armas tipo mazo dan bonificación de daño pero son mas lentas');
            $table->integer('BONIFICACION_DANO_MAGICO')->default(0)->comment(' las armas tipo baston magico dan bonificación de daño magico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armas');
    }
};
