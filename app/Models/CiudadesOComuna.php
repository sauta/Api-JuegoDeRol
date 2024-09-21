<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CiudadesOComuna
 * 
 * @property int $ID_CIUDAD
 * @property string $COMUNA_CIUDAD
 * @property int|null $ID_ALCALDE
 * @property int $ID_PROVINCIA
 * @property int $ID_TERRENO
 * 
 * @property Provincia $provincia
 * @property Terreno $terreno
 * @property Collection|Ubicacione[] $ubicaciones
 *
 * @package App\Models
 */
class CiudadesOComuna extends Model
{
	protected $table = 'ciudades_o_comunas';
	protected $primaryKey = 'ID_CIUDAD';
	public $timestamps = false;

	protected $casts = [
		'ID_ALCALDE' => 'int',
		'ID_PROVINCIA' => 'int',
		'ID_TERRENO' => 'int'
	];

	protected $fillable = [
		'COMUNA_CIUDAD',
		'ID_ALCALDE',
		'ID_PROVINCIA',
		'ID_TERRENO'
	];

	public function provincia()
	{
		return $this->belongsTo(Provincia::class, 'ID_PROVINCIA');
	}

	public function terreno()
	{
		return $this->belongsTo(Terreno::class, 'ID_TERRENO');
	}

	public function ubicaciones()
	{
		return $this->hasMany(Ubicacione::class, 'ID_CIUDAD');
	}
}
