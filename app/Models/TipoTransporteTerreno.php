<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoTransporteTerreno
 * 
 * @property int $ID_TIPO_TRANSPORTE
 * @property int $ID_TERRENO
 * 
 * @property Terreno $terreno
 * @property TiposDeTransporte $tipos_de_transporte
 *
 * @package App\Models
 */
class TipoTransporteTerreno extends Model
{
	protected $table = 'tipo_transporte_terreno';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TIPO_TRANSPORTE' => 'int',
		'ID_TERRENO' => 'int'
	];

	protected $fillable = [
		'ID_TIPO_TRANSPORTE',
		'ID_TERRENO'
	];

	public function terreno()
	{
		return $this->belongsTo(Terreno::class, 'ID_TERRENO');
	}

	public function tipos_de_transporte()
	{
		return $this->belongsTo(TiposDeTransporte::class, 'ID_TIPO_TRANSPORTE');
	}
}
