<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetosEnBotine
 * 
 * @property string|null $ID_OBJETO
 * @property int|null $ID_BOTIN
 * @property int $CANTIDAD
 * 
 * @property Botine|null $botine
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class ObjetosEnBotine extends Model
{
	protected $table = 'objetos_en_botines';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_BOTIN' => 'int',
		'CANTIDAD' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'ID_BOTIN',
		'CANTIDAD'
	];

	public function botine()
	{
		return $this->belongsTo(Botin::class, 'ID_BOTIN');
	}

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
