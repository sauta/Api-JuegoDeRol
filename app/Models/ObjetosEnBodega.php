<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnBodega
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_BODEGA
 * @property int|null $CANTIDAD
 * 
 * @property Bodega|null $bodega
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnBodega extends Model
{
	protected $table = 'objetos_en_bodegas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_BODEGA' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_BODEGA',
		'CANTIDAD'
	];

	public function bodega()
	{
		return $this->belongsTo(Bodega::class, 'ID_BODEGA');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
