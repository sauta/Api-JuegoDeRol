<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Misione
 * 
 * @property int $ID_MISION
 * @property string|null $ID_OBJETO
 * @property string $MISION
 * @property int|null $EXPERIENCIA
 * @property string $DESCRIPCION
 * @property int $DIFICULTAD
 * @property int|null $ID_ENEMIGO
 * @property int|null $ID_VICTIMA
 * @property int|null $ID_INICIADOR
 * @property int $ID_UBICACION
 * 
 * @property Objeto|null $objeto
 * @property Ubicacione $ubicacione
 * @property Collection|Botine[] $botines
 * @property MisionesEnCurso $misiones_en_curso
 *
 * @package App\Models
 */
class Mision extends Objeto
{
	protected $table = 'misiones';
	protected $primaryKey = 'ID_MISION';
	public $timestamps = false;

	protected $casts = [
		'EXPERIENCIA' => 'int',
		'DIFICULTAD' => 'int',
		'ID_ENEMIGO' => 'int',
		'ID_VICTIMA' => 'int',
		'ID_INICIADOR' => 'int',
		'ID_UBICACION' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'MISION',
		'EXPERIENCIA',
		'DESCRIPCION',
		'DIFICULTAD',
		'ID_ENEMIGO',
		'ID_VICTIMA',
		'ID_INICIADOR',
		'ID_UBICACION'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacion::class, 'ID_UBICACION');
	}

	public function botines()
	{
		return $this->hasMany(Botin::class, 'ID_MISION');
	}

	public function misiones_en_curso()
	{
		return $this->hasOne(MisionesEnCurso::class, 'ID_MISION');
	}
}
