<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Clase
 * 
 * @property int $ID_CLASE
 * @property string $NOMBRE_CLASE
 * @property int $BONIFICACION_VIDA
 * @property int $BONIFICACION_MANA
 * @property int $BONIFICACION_FUERZA
 * @property int $BONIFICACION_INTELIGENCIA
 * @property int $BONIFICACION_DESTREZA
 * @property int $BONIFICACION_ARMADURA
 * @property int $BONIFICACION_DANO
 * @property int $BONIFICACION_DANO_MAGICO
 * @property int $BONIFICACION_ALCANCE
 * @property int $BONIFICACION_PESO
 * @property int $BONIFICACION_PRECIO
 * 
 * @property Collection|Compatibilidade[] $compatibilidades
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Clase extends Model
{
	protected $table = 'clases';
	protected $primaryKey = 'ID_CLASE';
	public $timestamps = false;

	protected $casts = [
		'BONIFICACION_VIDA' => 'int',
		'BONIFICACION_MANA' => 'int',
		'BONIFICACION_FUERZA' => 'int',
		'BONIFICACION_INTELIGENCIA' => 'int',
		'BONIFICACION_DESTREZA' => 'int',
		'BONIFICACION_ARMADURA' => 'int',
		'BONIFICACION_DANO' => 'int',
		'BONIFICACION_DANO_MAGICO' => 'int',
		'BONIFICACION_ALCANCE' => 'int',
		'BONIFICACION_PESO' => 'int',
		'BONIFICACION_PRECIO' => 'int'
	];

	protected $fillable = [
		'NOMBRE_CLASE',
		'BONIFICACION_VIDA',
		'BONIFICACION_MANA',
		'BONIFICACION_FUERZA',
		'BONIFICACION_INTELIGENCIA',
		'BONIFICACION_DESTREZA',
		'BONIFICACION_ARMADURA',
		'BONIFICACION_DANO',
		'BONIFICACION_DANO_MAGICO',
		'BONIFICACION_ALCANCE',
		'BONIFICACION_PESO',
		'BONIFICACION_PRECIO'
	];

	public function compatibilidades()
	{
		return $this->hasMany(Compatibilidad::class, 'ID_CLASE');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_CLASE');
	}
}
