<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mochila
 * 
 * @property int $ID_MOCHILA
 * @property string|null $NOMBRE_MOCHILA
 * @property int|null $ID_PERSONAJE
 * @property int $CAPACIDAD
 * @property string|null $ID_OBJETO
 * 
 * @property Objeto|null $objeto
 * @property Personaje|null $personaje
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Mochila extends Model
{
	protected $table = 'mochilas';
	protected $primaryKey = 'ID_MOCHILA';
	public $timestamps = false;

	protected $casts = [
		'ID_PERSONAJE' => 'int',
		'CAPACIDAD' => 'int'
	];

	protected $fillable = [
		'NOMBRE_MOCHILA',
		'ID_PERSONAJE',
		'CAPACIDAD',
		'ID_OBJETO'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_PERSONAJE');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_mochila', 'ID_MOCHILA', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
