<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnInventario
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_INVENTARIO
 * @property int|null $CANTIDAD
 * 
 * @property Inventario|null $inventario
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnInventario extends Model
{
	protected $table = 'objetos_en_inventarios';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INVENTARIO' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_INVENTARIO',
		'CANTIDAD'
	];

	public function inventario()
	{
		return $this->belongsTo(Inventario::class, 'ID_INVENTARIO');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
