<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cofre
 * 
 * @property int $ID_COFRE
 * @property int|null $ID_UBICACION
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_SAQUEO
 * 
 * @property Ubicacione|null $ubicacione
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Cofre extends Model
{
	protected $table = 'cofres';
	protected $primaryKey = 'ID_COFRE';
	public $timestamps = false;

	protected $casts = [
		'ID_UBICACION' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_SAQUEO' => 'datetime'
	];

	protected $fillable = [
		'ID_UBICACION',
		'FECHA_CREACION',
		'FECHA_SAQUEO'
	];

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacione::class, 'ID_UBICACION');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_cofres', 'ID_COFRE', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
