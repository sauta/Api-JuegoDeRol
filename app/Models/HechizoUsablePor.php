<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HechizoUsablePor
 * 
 * @property int $ID_COMPATIBILIDAD
 * @property int|null $ID_TIPO_HECHIZO
 * 
 * @property Compatibilidade $compatibilidade
 * @property TiposDeHechizo|null $tipos_de_hechizo
 *
 * @package App\Models
 */
class HechizoUsablePor extends Model
{
	protected $table = 'hechizo_usable_por';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPATIBILIDAD' => 'int',
		'ID_TIPO_HECHIZO' => 'int'
	];

	protected $fillable = [
		'ID_COMPATIBILIDAD',
		'ID_TIPO_HECHIZO'
	];

	public function compatibilidade()
	{
		return $this->belongsTo(Compatibilidade::class, 'ID_COMPATIBILIDAD');
	}

	public function tipos_de_hechizo()
	{
		return $this->belongsTo(TiposDeHechizo::class, 'ID_TIPO_HECHIZO');
	}
}
