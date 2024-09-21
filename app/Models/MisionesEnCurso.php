<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MisionesEnCurso
 * 
 * @property int $ID_MISION
 * @property int $ID_PERSONAJE
 * @property Carbon|null $FECHA_INICIO_MISION
 * @property Carbon|null $FECHA_TERMINO_MISION
 * 
 * @property Misione $misione
 * @property Personaje $personaje
 *
 * @package App\Models
 */
class MisionesEnCurso extends Model
{
	protected $table = 'misiones_en_curso';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MISION' => 'int',
		'ID_PERSONAJE' => 'int',
		'FECHA_INICIO_MISION' => 'datetime',
		'FECHA_TERMINO_MISION' => 'datetime'
	];

	protected $fillable = [
		'ID_MISION',
		'ID_PERSONAJE',
		'FECHA_INICIO_MISION',
		'FECHA_TERMINO_MISION'
	];

	public function misione()
	{
		return $this->belongsTo(Mision::class, 'ID_MISION');
	}

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_PERSONAJE');
	}
}
