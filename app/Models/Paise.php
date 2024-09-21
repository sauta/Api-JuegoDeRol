<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paise
 * 
 * @property int $ID_PAIS
 * @property int|null $ID_REY
 * @property string $PAIS
 * @property string $HIMNO_NACIONAL
 * @property int|null $ID_MAPA
 * 
 * @property Mapa|null $mapa
 * @property Collection|Regione[] $regiones
 *
 * @package App\Models
 */
class Paise extends Model
{
	protected $table = 'paises';
	protected $primaryKey = 'ID_PAIS';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAIS' => 'int',
		'ID_REY' => 'int',
		'ID_MAPA' => 'int'
	];

	protected $fillable = [
		'ID_REY',
		'PAIS',
		'HIMNO_NACIONAL',
		'ID_MAPA'
	];

	public function mapa()
	{
		return $this->belongsTo(Mapa::class, 'ID_MAPA');
	}

	public function regiones()
	{
		return $this->hasMany(Regione::class, 'ID_PAIS');
	}
}
