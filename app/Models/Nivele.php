<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivele
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
class Nivele extends Model
{
	protected $table = 'niveles';
	protected $primaryKey = 'ID_NIVEL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_NIVEL' => 'int',
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
