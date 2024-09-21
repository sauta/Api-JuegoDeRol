<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Botine
 * 
 * @property int $ID_BOTIN
 * @property int|null $ID_MISION
 * @property Carbon|null $FECHA_SAQUEO
 * @property string|null $ESTADO
 * 
 * @property Misione|null $misione
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Botine extends Model
{
	protected $table = 'botines';
	protected $primaryKey = 'ID_BOTIN';
	public $timestamps = false;

	protected $casts = [
		'ID_MISION' => 'int',
		'FECHA_SAQUEO' => 'datetime'
	];

	protected $fillable = [
		'ID_MISION',
		'FECHA_SAQUEO',
		'ESTADO'
	];

	public function misione()
	{
		return $this->belongsTo(Misione::class, 'ID_MISION');
	}

	public function objetos()
	{
		return $this->belongsToMany(Objeto::class, 'objetos_en_botines', 'ID_BOTIN', 'ID_OBJETO')
					->withPivot('CANTIDAD');
	}
}
