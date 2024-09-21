<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacione
 * 
 * @property int $ID_UBICACION
 * @property string $CALLE
 * @property int $NUMERO
 * @property int|null $POSTAL
 * @property int $ID_CIUDAD
 * @property string|null $REFERENCIA
 * @property string $DESCRIPCION_TERRENO
 * @property float|null $COORDENADAS_X
 * @property float|null $COORDENADAS_Y
 * 
 * @property CiudadesOComuna $ciudades_o_comuna
 * @property Collection|Casa[] $casas
 * @property Collection|Cofre[] $cofres
 * @property Collection|Hogare[] $hogares
 * @property Collection|Misione[] $misiones
 * @property Collection|Personaje[] $personajes
 * @property Collection|Transporte[] $transportes
 *
 * @package App\Models
 */
class Ubicacione extends Model
{
	protected $table = 'ubicaciones';
	protected $primaryKey = 'ID_UBICACION';
	public $timestamps = false;

	protected $casts = [
		'NUMERO' => 'int',
		'POSTAL' => 'int',
		'ID_CIUDAD' => 'int',
		'COORDENADAS_X' => 'float',
		'COORDENADAS_Y' => 'float'
	];

	protected $fillable = [
		'CALLE',
		'NUMERO',
		'POSTAL',
		'ID_CIUDAD',
		'REFERENCIA',
		'DESCRIPCION_TERRENO',
		'COORDENADAS_X',
		'COORDENADAS_Y'
	];

	public function ciudades_o_comuna()
	{
		return $this->belongsTo(CiudadesOComuna::class, 'ID_CIUDAD');
	}

	public function casas()
	{
		return $this->hasMany(Casa::class, 'ID_UBICACION');
	}

	public function cofres()
	{
		return $this->hasMany(Cofre::class, 'ID_UBICACION');
	}

	public function hogares()
	{
		return $this->hasMany(Hogare::class, 'ID_UBICACION');
	}

	public function misiones()
	{
		return $this->hasMany(Misione::class, 'ID_UBICACION');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_UBICACION');
	}

	public function transportes()
	{
		return $this->hasMany(Transporte::class, 'ID_UBICACION');
	}
}
