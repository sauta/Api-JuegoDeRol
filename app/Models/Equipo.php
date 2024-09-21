<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 * 
 * @property int $ID_EQUIPO
 * @property string $CANTO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_DISOLUCION
 * @property int|null $ID_LIDER
 * 
 * @property Personaje|null $personaje
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Equipo extends Model
{
	protected $table = 'equipos';
	protected $primaryKey = 'ID_EQUIPO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EQUIPO' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_DISOLUCION' => 'datetime',
		'ID_LIDER' => 'int'
	];

	protected $fillable = [
		'CANTO',
		'FECHA_CREACION',
		'FECHA_DISOLUCION',
		'ID_LIDER'
	];

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_LIDER');
	}

	public function personajes()
	{
		return $this->belongsToMany(Personaje::class, 'personajes_en_equipo', 'ID_EQUIPO', 'ID_PERSONAJE');
	}
}
