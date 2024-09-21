<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivel
 * 
 * @property int $ID_NIVEL
 * @property string $NIVEL
 * @property int $EXPERIENCIA_REQUERIDA
 * @property string $DESCRIPCION
 * 
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Nivel extends Model
{
	protected $table = 'niveles';
	protected $primaryKey = 'ID_NIVEL';
	public $timestamps = false;

	protected $casts = [
		'EXPERIENCIA_REQUERIDA' => 'int'
	];

	protected $fillable = [
		'NIVEL',
		'EXPERIENCIA_REQUERIDA',
		'DESCRIPCION'
	];

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_NIVEL');
	}
}
