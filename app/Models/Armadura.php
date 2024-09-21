<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Armadura
 * 
 * @property int $ID_ARMADURA
 * @property string $NOMBRE_ARMADURA
 * @property int $ID_TIPO_ARMA
 * @property string|null $ID_OBJETO
 * @property int|null $NIVEL_REQUERIDO
 * @property int $DEFENSA
 * @property int $DEFENSA_MAGICA
 * @property int $BONIFICACION_VIDA
 * @property int $BONIFICACION_MANA
 * @property int $BONIFICACION_DEFENSA
 * @property int $BONIFICACION_DEFENSA_MAGICA
 * 
 * @property Objeto|null $objeto
 * @property TipoDeArma $tipo_de_arma
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Armadura extends Model
{
	protected $table = 'armaduras';
	protected $primaryKey = 'ID_ARMADURA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ARMADURA' => 'int',
		'ID_TIPO_ARMA' => 'int',
		'NIVEL_REQUERIDO' => 'int',
		'DEFENSA' => 'int',
		'DEFENSA_MAGICA' => 'int',
		'BONIFICACION_VIDA' => 'int',
		'BONIFICACION_MANA' => 'int',
		'BONIFICACION_DEFENSA' => 'int',
		'BONIFICACION_DEFENSA_MAGICA' => 'int'
	];

	protected $fillable = [
		'NOMBRE_ARMADURA',
		'ID_TIPO_ARMA',
		'ID_OBJETO',
		'NIVEL_REQUERIDO',
		'DEFENSA',
		'DEFENSA_MAGICA',
		'BONIFICACION_VIDA',
		'BONIFICACION_MANA',
		'BONIFICACION_DEFENSA',
		'BONIFICACION_DEFENSA_MAGICA'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function tipo_de_arma()
	{
		return $this->belongsTo(TipoDeArma::class, 'ID_TIPO_ARMA');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_ARMADURA_EQUIPADA');
	}
}
