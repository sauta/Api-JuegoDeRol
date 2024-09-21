<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bodega
 * 
 * @property int $ID_BODEGA
 * @property int|null $ID_HOGAR
 * @property int $CAPACIDAD
 * 
 * @property Hogare|null $hogare
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Bodega extends Model
{
	protected $table = 'bodegas';
	protected $primaryKey = 'ID_BODEGA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_BODEGA' => 'int',
		'ID_HOGAR' => 'int',
		'CAPACIDAD' => 'int'
	];

	protected $fillable = [
		'ID_HOGAR',
		'CAPACIDAD'
	];

	public function hogare()
	{
		return $this->belongsTo(Hogare::class, 'ID_HOGAR');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_bodegas', 'ID_BODEGA', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
