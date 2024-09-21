<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hogare
 * 
 * @property int $ID_HOGAR
 * @property int|null $ID_PROPIETARIO
 * @property int $CAPACIDAD_BODEGAJATE
 * @property string $DESCRIPCION
 * @property int $ID_UBICACION
 * @property int $BONIFICACION_VIDA
 * @property int $BONIFICACION_MANA
 * @property int $BONIFICACION_FUERZA
 * @property int $BONIFICACION_INTELIGENCIA
 * @property int $BONIFICACION_DESTREZA
 * @property int $BONIFICACION_ARMADURA
 * @property int $BONIFICACION_DANO
 * @property int $BONIFICACION_DANO_MAGICO
 * @property int $BONIFICACION_ALCANCE
 * 
 * @property Ubicacione $ubicacione
 * @property Collection|Bodega[] $bodegas
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Hogare extends Model
{
	protected $table = 'hogares';
	protected $primaryKey = 'ID_HOGAR';
	public $timestamps = false;

	protected $casts = [
		'ID_PROPIETARIO' => 'int',
		'CAPACIDAD_BODEGAJATE' => 'int',
		'ID_UBICACION' => 'int',
		'BONIFICACION_VIDA' => 'int',
		'BONIFICACION_MANA' => 'int',
		'BONIFICACION_FUERZA' => 'int',
		'BONIFICACION_INTELIGENCIA' => 'int',
		'BONIFICACION_DESTREZA' => 'int',
		'BONIFICACION_ARMADURA' => 'int',
		'BONIFICACION_DANO' => 'int',
		'BONIFICACION_DANO_MAGICO' => 'int',
		'BONIFICACION_ALCANCE' => 'int'
	];

	protected $fillable = [
		'ID_PROPIETARIO',
		'CAPACIDAD_BODEGAJATE',
		'DESCRIPCION',
		'ID_UBICACION',
		'BONIFICACION_VIDA',
		'BONIFICACION_MANA',
		'BONIFICACION_FUERZA',
		'BONIFICACION_INTELIGENCIA',
		'BONIFICACION_DESTREZA',
		'BONIFICACION_ARMADURA',
		'BONIFICACION_DANO',
		'BONIFICACION_DANO_MAGICO',
		'BONIFICACION_ALCANCE'
	];

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacione::class, 'ID_UBICACION');
	}

	public function bodegas()
	{
		return $this->hasMany(Bodega::class, 'ID_HOGAR');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_HOGAR');
	}
}
