<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $ID_INVENTARIO
 * @property int $CAPACIDAD_CARGA
 * @property int|null $ID_PERSONAJE
 * 
 * @property Personaje|null $personaje
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventarios';
	protected $primaryKey = 'ID_INVENTARIO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INVENTARIO' => 'int',
		'CAPACIDAD_CARGA' => 'int',
		'ID_PERSONAJE' => 'int'
	];

	protected $fillable = [
		'CAPACIDAD_CARGA',
		'ID_PERSONAJE'
	];

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_PERSONAJE');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_inventarios', 'ID_INVENTARIO', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
