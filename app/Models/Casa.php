<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Casa
 * 
 * @property int $ID_CASA
 * @property int|null $ID_LIDER
 * @property string $DESCRIPCION
 * @property string $ESCUDO_DE_ARMAS
 * @property string $LEMA
 * @property int $ID_UBICACION
 * 
 * @property Ubicacione $ubicacione
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Casa extends Model
{
	protected $table = 'casas';
	protected $primaryKey = 'ID_CASA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CASA' => 'int',
		'ID_LIDER' => 'int',
		'ID_UBICACION' => 'int'
	];

	protected $fillable = [
		'ID_LIDER',
		'DESCRIPCION',
		'ESCUDO_DE_ARMAS',
		'LEMA',
		'ID_UBICACION'
	];

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacione::class, 'ID_UBICACION');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_CASA');
	}
}
