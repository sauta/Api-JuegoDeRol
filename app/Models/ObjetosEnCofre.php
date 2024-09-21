<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnCofre
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_COFRE
 * @property int|null $CANTIDAD
 * 
 * @property Cofre|null $cofre
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnCofre extends Model
{
	protected $table = 'objetos_en_cofres';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COFRE' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_COFRE',
		'CANTIDAD'
	];

	public function cofre()
	{
		return $this->belongsTo(Cofre::class, 'ID_COFRE');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
