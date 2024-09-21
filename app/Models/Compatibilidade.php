<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compatibilidade
 * 
 * @property int $ID_COMPATIBILIDAD
 * @property int $ID_CLASE
 * @property int $ID_RAZA
 * 
 * @property Clase $clase
 * @property Raza $raza
 * @property ArmaUsablePor $arma_usable_por
 * @property HechizoUsablePor $hechizo_usable_por
 *
 * @package App\Models
 */
class Compatibilidade extends Model
{
	protected $table = 'compatibilidades';
	protected $primaryKey = 'ID_COMPATIBILIDAD';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPATIBILIDAD' => 'int',
		'ID_CLASE' => 'int',
		'ID_RAZA' => 'int'
	];

	protected $fillable = [
		'ID_CLASE',
		'ID_RAZA'
	];

	public function clase()
	{
		return $this->belongsTo(Clase::class, 'ID_CLASE');
	}

	public function raza()
	{
		return $this->belongsTo(Raza::class, 'ID_RAZA');
	}

	public function arma_usable_por()
	{
		return $this->hasOne(ArmaUsablePor::class, 'ID_COMPATIBILIDAD');
	}

	public function hechizo_usable_por()
	{
		return $this->hasOne(HechizoUsablePor::class, 'ID_COMPATIBILIDAD');
	}
}
