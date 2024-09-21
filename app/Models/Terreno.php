<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Terreno
 * 
 * @property int $ID_TERRENO
 * @property string $TERRENO
 * @property string|null $DESCRIPCION
 * 
 * @property Collection|CiudadesOComuna[] $ciudades_o_comunas
 * @property TipoTransporteTerreno $tipo_transporte_terreno
 *
 * @package App\Models
 */
class Terreno extends Model
{
	protected $table = 'terrenos';
	protected $primaryKey = 'ID_TERRENO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TERRENO' => 'int'
	];

	protected $fillable = [
		'TERRENO',
		'DESCRIPCION'
	];

	public function ciudades_o_comunas()
	{
		return $this->hasMany(CiudadesOComuna::class, 'ID_TERRENO');
	}

	public function tipo_transporte_terreno()
	{
		return $this->hasOne(TipoTransporteTerreno::class, 'ID_TERRENO');
	}
}
