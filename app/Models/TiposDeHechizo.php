<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDeHechizo
 * 
 * @property int $ID_TIPO_HECHIZO
 * @property string $TIPOS_DE_HECHIZO
 * @property string|null $DESCRIPCION
 * @property int $ID_ELEMENTO
 * 
 * @property Elemento $elemento
 * @property HechizoUsablePor $hechizo_usable_por
 * @property Collection|Hechizo[] $hechizos
 *
 * @package App\Models
 */
class TiposDeHechizo extends Model
{
	protected $table = 'tipos_de_hechizos';
	protected $primaryKey = 'ID_TIPO_HECHIZO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TIPO_HECHIZO' => 'int',
		'ID_ELEMENTO' => 'int'
	];

	protected $fillable = [
		'TIPOS_DE_HECHIZO',
		'DESCRIPCION',
		'ID_ELEMENTO'
	];

	public function elemento()
	{
		return $this->belongsTo(Elemento::class, 'ID_ELEMENTO');
	}

	public function hechizo_usable_por()
	{
		return $this->hasOne(HechizoUsablePor::class, 'ID_TIPO_HECHIZO');
	}

	public function hechizos()
	{
		return $this->hasMany(Hechizo::class, 'ID_TIPO_HECHIZO');
	}
}
