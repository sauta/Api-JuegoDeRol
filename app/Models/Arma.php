<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Arma
 * 
 * @property int $ID_ARMA
 * @property string $NOMBRE_ARMA
 * @property int $DANO
 * @property int|null $ID_ARMA_CONSUMIBLE
 * @property int|null $CARGA
 * @property int|null $NIVEL_REQUERIDO
 * @property int $ALCANCE
 * @property int $VELOCIDAD_DE_ATAQUE
 * @property int $ID_TIPO_ARMA
 * @property string|null $ID_OBJETO
 * @property int $BONIFICACION_VIDA
 * @property int $BONIFICACION_MANA
 * @property int $BONIFICACION_FUERZA
 * @property int $BONIFICACION_DANO
 * @property int $BONIFICACION_DANO_MAGICO
 * 
 * @property Objeto|null $objeto
 * @property TipoDeArma $tipo_de_arma
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Arma extends Model
{
	protected $table = 'armas';
	protected $primaryKey = 'ID_ARMA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ARMA' => 'int',
		'DANO' => 'int',
		'ID_ARMA_CONSUMIBLE' => 'int',
		'CARGA' => 'int',
		'NIVEL_REQUERIDO' => 'int',
		'ALCANCE' => 'int',
		'VELOCIDAD_DE_ATAQUE' => 'int',
		'ID_TIPO_ARMA' => 'int',
		'BONIFICACION_VIDA' => 'int',
		'BONIFICACION_MANA' => 'int',
		'BONIFICACION_FUERZA' => 'int',
		'BONIFICACION_DANO' => 'int',
		'BONIFICACION_DANO_MAGICO' => 'int'
	];

	protected $fillable = [
		'NOMBRE_ARMA',
		'DANO',
		'ID_ARMA_CONSUMIBLE',
		'CARGA',
		'NIVEL_REQUERIDO',
		'ALCANCE',
		'VELOCIDAD_DE_ATAQUE',
		'ID_TIPO_ARMA',
		'ID_OBJETO',
		'BONIFICACION_VIDA',
		'BONIFICACION_MANA',
		'BONIFICACION_FUERZA',
		'BONIFICACION_DANO',
		'BONIFICACION_DANO_MAGICO'
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
		return $this->hasMany(Personaje::class, 'ID_ARMA_EQUIPADA');
	}
}
