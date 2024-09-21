<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnMochila
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_MOCHILA
 * @property int|null $CANTIDAD
 * 
 * @property Mochila|null $mochila
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnMochila extends Model
{
	protected $table = 'objetos_en_mochila';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MOCHILA' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_MOCHILA',
		'CANTIDAD'
	];

	public function mochila()
	{
		return $this->belongsTo(Mochila::class, 'ID_MOCHILA');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
