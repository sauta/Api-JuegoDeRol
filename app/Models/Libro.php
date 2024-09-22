<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 * 
 * @property int $ID_LIBRO
 * @property string|null $ID_OBJETO
 * @property string $TITULO
 * @property string $HISTORIA
 * @property string $AUTOR
 * @property int|null $ID_AUTOR
 * 
 * @property Objeto|null $objeto
 * @property Conocimiento $conocimiento
 * @property Collection|Hechizo[] $hechizos
 *
 * @package App\Models
 */
class Libro extends Objeto
{
	protected $table = 'libros';
	protected $primaryKey = 'ID_LIBRO';
	public $timestamps = false;

	protected $casts = [
		'ID_AUTOR' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'TITULO',
		'HISTORIA',
		'AUTOR',
		'ID_AUTOR'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function conocimiento()
	{
		return $this->hasOne(Conocimiento::class, 'ID_LIBRO');
	}

	public function hechizos()
	{
		return $this->belongsToMany(Hechizo::class, 'hechizos_enel_libro', 'ID_LIBRO', 'ID_HECHIZO')
					->withPivot('ID_HECHIZO_ENEL_LIBRO', 'NIVEL_REQUERIDO');
	}
}
