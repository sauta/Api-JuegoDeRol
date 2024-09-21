<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacene
 * 
 * @property int $ID_ALMACEN
 * @property int $CAPACIDAD
 * @property int|null $ID_TRANSPORTE
 * 
 * @property Transporte|null $transporte
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Almacene extends Model
{
	protected $table = 'almacenes';
	protected $primaryKey = 'ID_ALMACEN';
	public $timestamps = false;

	protected $casts = [
		'CAPACIDAD' => 'int',
		'ID_TRANSPORTE' => 'int'
	];

	protected $fillable = [
		'CAPACIDAD',
		'ID_TRANSPORTE'
	];

	public function transporte()
	{
		return $this->belongsTo(Transporte::class, 'ID_TRANSPORTE');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_almacenes', 'ID_ALMACEN', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
