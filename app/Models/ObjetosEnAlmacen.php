<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnAlmacene
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_ALMACEN
 * @property int|null $CANTIDAD
 * 
 * @property Almacene|null $almacene
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnAlmacen extends Model
{
	protected $table = 'objetos_en_almacenes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ALMACEN' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_ALMACEN',
		'CANTIDAD'
	];

	public function almacene()
	{
		return $this->belongsTo(Almacen::class, 'ID_ALMACEN');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
