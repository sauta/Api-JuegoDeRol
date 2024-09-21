<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transporte
 * 
 * @property int $ID_TRANSPORTE
 * @property string $ID_OBJETO
 * @property string $NOMBRE
 * @property int $VELOCIDAD
 * @property int $CAPACIDAD_ALMACEN
 * @property string|null $DESCRIPCION
 * @property int|null $ID_TIPO_TRANSPORTE
 * @property int|null $ID_UBICACION
 * 
 * @property Objeto $objeto
 * @property TiposDeTransporte|null $tipos_de_transporte
 * @property Ubicacione|null $ubicacione
 * @property Collection|Almacene[] $almacenes
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Transporte extends Model
{
	protected $table = 'transportes';
	protected $primaryKey = 'ID_TRANSPORTE';
	public $timestamps = false;

	protected $casts = [
		'VELOCIDAD' => 'int',
		'CAPACIDAD_ALMACEN' => 'int',
		'ID_TIPO_TRANSPORTE' => 'int',
		'ID_UBICACION' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'NOMBRE',
		'VELOCIDAD',
		'CAPACIDAD_ALMACEN',
		'DESCRIPCION',
		'ID_TIPO_TRANSPORTE',
		'ID_UBICACION'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function tipos_de_transporte()
	{
		return $this->belongsTo(TiposDeTransporte::class, 'ID_TIPO_TRANSPORTE');
	}

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacion::class, 'ID_UBICACION');
	}

	public function almacenes()
	{
		return $this->hasMany(Almacene::class, 'ID_TRANSPORTE');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_TRANSPORTE');
	}
}
