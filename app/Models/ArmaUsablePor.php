<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArmaUsablePor
 * 
 * @property int $ID_COMPATIBILIDAD
 * @property int|null $ID_TIPO_ARMA
 * 
 * @property Compatibilidade $compatibilidade
 * @property TipoDeArma|null $tipo_de_arma
 *
 * @package App\Models
 */
class ArmaUsablePor extends Model
{
	protected $table = 'arma_usable_por';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPATIBILIDAD' => 'int',
		'ID_TIPO_ARMA' => 'int'
	];

	protected $fillable = [
		'ID_COMPATIBILIDAD',
		'ID_TIPO_ARMA'
	];

	public function compatibilidade()
	{
		return $this->belongsTo(Compatibilidad::class, 'ID_COMPATIBILIDAD');
	}

	public function tipo_de_arma()
	{
		return $this->belongsTo(TipoDeArma::class, 'ID_TIPO_ARMA');
	}
}
