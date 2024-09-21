<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mapa
 * 
 * @property int $ID_MAPA
 * @property string|null $ID_OBJETO
 * @property string $MAPA
 * @property string $HISTORIA_DEL_MUNDO
 * 
 * @property Objeto|null $objeto
 * @property Collection|Paise[] $paises
 *
 * @package App\Models
 */
class Mapa extends Model
{
	protected $table = 'mapas';
	protected $primaryKey = 'ID_MAPA';
	public $timestamps = false;

	protected $fillable = [
		'ID_OBJETO',
		'MAPA',
		'HISTORIA_DEL_MUNDO'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function paises()
	{
		return $this->hasMany(Paise::class, 'ID_MAPA');
	}
}
