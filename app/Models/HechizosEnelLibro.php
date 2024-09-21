<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HechizosEnelLibro
 * 
 * @property int $ID_HECHIZO_ENEL_LIBRO
 * @property int $ID_LIBRO
 * @property int $ID_HECHIZO
 * @property int $NIVEL_REQUERIDO
 * 
 * @property Hechizo $hechizo
 * @property Libro $libro
 *
 * @package App\Models
 */
class HechizosEnelLibro extends Model
{
	protected $table = 'hechizos_enel_libro';
	protected $primaryKey = 'ID_HECHIZO_ENEL_LIBRO';
	public $timestamps = false;

	protected $casts = [
		'ID_LIBRO' => 'int',
		'ID_HECHIZO' => 'int',
		'NIVEL_REQUERIDO' => 'int'
	];

	protected $fillable = [
		'ID_LIBRO',
		'ID_HECHIZO',
		'NIVEL_REQUERIDO'
	];

	public function hechizo()
	{
		return $this->belongsTo(Hechizo::class, 'ID_HECHIZO');
	}

	public function libro()
	{
		return $this->belongsTo(Libro::class, 'ID_LIBRO');
	}
}
