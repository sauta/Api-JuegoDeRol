<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conocimiento
 * 
 * @property int|null $ID_LIBRO
 * @property int|null $ID_HECHIZO
 * @property int|null $ID_PERSONAJE
 * @property Carbon|null $FECHA_APRENDIZAGE
 * 
 * @property Hechizo|null $hechizo
 * @property Libro|null $libro
 * @property Personaje|null $personaje
 *
 * @package App\Models
 */
class Conocimiento extends Model
{
	protected $table = 'conocimiento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_LIBRO' => 'int',
		'ID_HECHIZO' => 'int',
		'ID_PERSONAJE' => 'int',
		'FECHA_APRENDIZAGE' => 'datetime'
	];

	protected $fillable = [
		'ID_LIBRO',
		'ID_HECHIZO',
		'ID_PERSONAJE',
		'FECHA_APRENDIZAGE'
	];

	public function hechizo()
	{
		return $this->belongsTo(Hechizo::class, 'ID_HECHIZO');
	}

	public function libro()
	{
		return $this->belongsTo(Libro::class, 'ID_LIBRO');
	}

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_PERSONAJE');
	}
}
