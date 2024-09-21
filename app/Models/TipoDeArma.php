<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDeArma
 * 
 * @property int $ID_TIPO_ARMA
 * @property string $TIPO_DE_ARMA
 * @property string $DESCRIPCION
 * 
 * @property ArmaUsablePor $arma_usable_por
 * @property Collection|Armadura[] $armaduras
 * @property Collection|Arma[] $armas
 *
 * @package App\Models
 */
class TipoDeArma extends Model
{
	protected $table = 'tipo_de_armas';
	protected $primaryKey = 'ID_TIPO_ARMA';
	public $timestamps = false;

	protected $fillable = [
		'TIPO_DE_ARMA',
		'DESCRIPCION'
	];

	public function arma_usable_por()
	{
		return $this->hasOne(ArmaUsablePor::class, 'ID_TIPO_ARMA');
	}

	public function armaduras()
	{
		return $this->hasMany(Armadura::class, 'ID_TIPO_ARMA');
	}

	public function armas()
	{
		return $this->hasMany(Arma::class, 'ID_TIPO_ARMA');
	}
}
