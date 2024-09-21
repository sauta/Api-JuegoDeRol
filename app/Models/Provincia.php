<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincia
 * 
 * @property int $ID_PROVINCIA
 * @property string $PROVINCIA
 * @property int|null $CAPITAL_PROVINCIA
 * @property int $ID_REGION
 * 
 * @property Regione $regione
 * @property Collection|CiudadesOComuna[] $ciudades_o_comunas
 *
 * @package App\Models
 */
class Provincia extends Model
{
	protected $table = 'provincias';
	protected $primaryKey = 'ID_PROVINCIA';
	public $timestamps = false;

	protected $casts = [
		'CAPITAL_PROVINCIA' => 'int',
		'ID_REGION' => 'int'
	];

	protected $fillable = [
		'PROVINCIA',
		'CAPITAL_PROVINCIA',
		'ID_REGION'
	];

	public function regione()
	{
		return $this->belongsTo(Region::class, 'ID_REGION');
	}

	public function ciudades_o_comunas()
	{
		return $this->hasMany(CiudadesOComuna::class, 'ID_PROVINCIA');
	}
}
