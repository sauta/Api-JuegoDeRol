<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hechizo
 * 
 * @property int $ID_HECHIZO
 * @property string $NOMBRE_HECHIZO
 * @property int $VELOCIDAD_DE_HECHIZO
 * @property int $DANO_MAGICO
 * @property int $ALCANCE
 * @property int $COSTO_MANA
 * @property int $ID_TIPO_HECHIZO
 * 
 * @property TiposDeHechizo $tipos_de_hechizo
 * @property Conocimiento $conocimiento
 * @property Collection|Libro[] $libros
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Hechizo extends Model
{
	protected $table = 'hechizos';
	protected $primaryKey = 'ID_HECHIZO';
	public $timestamps = false;

	protected $casts = [
		'VELOCIDAD_DE_HECHIZO' => 'int',
		'DANO_MAGICO' => 'int',
		'ALCANCE' => 'int',
		'COSTO_MANA' => 'int',
		'ID_TIPO_HECHIZO' => 'int'
	];

	protected $fillable = [
		'NOMBRE_HECHIZO',
		'VELOCIDAD_DE_HECHIZO',
		'DANO_MAGICO',
		'ALCANCE',
		'COSTO_MANA',
		'ID_TIPO_HECHIZO'
	];

	public function tipos_de_hechizo()
	{
		return $this->belongsTo(TiposDeHechizo::class, 'ID_TIPO_HECHIZO');
	}

	public function conocimiento()
	{
		return $this->hasOne(Conocimiento::class, 'ID_HECHIZO');
	}

	public function libros()
	{
		return $this->belongsToMany(Libro::class, 'hechizos_enel_libro', 'ID_HECHIZO', 'ID_LIBRO')
					->withPivot('ID_HECHIZO_ENEL_LIBRO', 'NIVEL_REQUERIDO');
	}

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_HECHIZO_EQUIPADO');
	}
}
