<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDeTransporte
 * 
 * @property int $ID_TIPO_TRANSPORTE
 * @property string $TIPO
 * @property string|null $DESCRIPCION
 * 
 * @property TipoTransporteTerreno $tipo_transporte_terreno
 * @property Collection|Transporte[] $transportes
 *
 * @package App\Models
 */
class TiposDeTransporte extends Model
{
	protected $table = 'tipos_de_transporte';
	protected $primaryKey = 'ID_TIPO_TRANSPORTE';
	public $timestamps = false;

	protected $fillable = [
		'TIPO',
		'DESCRIPCION'
	];

	public function tipo_transporte_terreno()
	{
		return $this->hasOne(TipoTransporteTerreno::class, 'ID_TIPO_TRANSPORTE');
	}

	public function transportes()
	{
		return $this->hasMany(Transporte::class, 'ID_TIPO_TRANSPORTE');
	}
}
