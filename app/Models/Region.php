<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Regione
 * 
 * @property int $ID_REGION
 * @property string $REGION
 * @property int|null $CAPITAL_REGION
 * @property int $ID_PAIS
 * 
 * @property Paise $paise
 * @property Collection|Provincia[] $provincias
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'regiones';
	protected $primaryKey = 'ID_REGION';
	public $timestamps = false;

	protected $casts = [
		'CAPITAL_REGION' => 'int',
		'ID_PAIS' => 'int'
	];

	protected $fillable = [
		'REGION',
		'CAPITAL_REGION',
		'ID_PAIS'
	];

	public function paise()
	{
		return $this->belongsTo(Pais::class, 'ID_PAIS');
	}

	public function provincias()
	{
		return $this->hasMany(Provincia::class, 'ID_REGION');
	}
}
