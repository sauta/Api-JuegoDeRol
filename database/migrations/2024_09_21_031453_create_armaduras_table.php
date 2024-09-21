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
        Schema::create('armaduras', function (Blueprint $table) {
            $table->comment('OBJETO QUE SE EQUIPA EL PERSONAJE, ESTE TIENE ZAPATOS, PECHERA PANTALONES Y CASCOS INCLUIDOS
EVITA QUE EL PJ RESIVA DAÑO FISICO Y DAÑO MAGICO
SI EL PJ TIENE MAS ARMADURA QUE EL ATAQUE DEL HECHIZO O ARMA, EL DAÑO AL PJ ES 0
SI EL PJ RESIBE MAS DAÑO FISICO/MAGICO QUE LA DEFENSA FISICA/MAGICA EL PJ RESIVE DAÑO A LOS PUNTOS DE VIDA');
            $table->integer('ID_ARMADURA', true);
            $table->string('NOMBRE_ARMADURA', 100);
            $table->integer('ID_TIPO_ARMA')->index('tipo_armas_fk_2')->comment('EL TIPO DE ARMADURA ESTA EN TIPO DE ARMA, YA QUE PUEDE SER TIPO ARMADURA MAGICA, O ARMADURA FISICA, TAMBIEN PUEDE HABER ARMADURA CONTRA ALGUNAS CLASES EN ESPECIFICOS COMO ARMADURA DE DRAGON.');
            $table->string('ID_OBJETO', 50)->nullable()->index('objetos_fk_5')->comment('ID DEL OBETO ARMADURA');
            $table->integer('NIVEL_REQUERIDO')->nullable()->comment('NIVEL REQUERIDO PARA UTILIZAR LA ARMADURA');
            $table->integer('DEFENSA')->default(0);
            $table->integer('DEFENSA_MAGICA')->default(0);
            $table->integer('BONIFICACION_VIDA')->default(0);
            $table->integer('BONIFICACION_MANA')->default(0);
            $table->integer('BONIFICACION_DEFENSA')->default(0);
            $table->integer('BONIFICACION_DEFENSA_MAGICA')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armaduras');
    }
};
