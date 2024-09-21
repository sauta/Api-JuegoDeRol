<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 * 
 * @property int $ID_MATERIAL
 * @property string $MATERIAL
 * @property int $ID_MATERIAL_DEBIL
 * @property int $ID_MATERIAL_FUERTE
 * @property int|null $ID_ELEMENTO_DEBIL
 * @property int|null $ID_ELEMENTO_FUERTE
 * @property string|null $DESCRIPCION
 * 
 * @property Collection|Objeto[] $objetos
 *
 * @package App\Models
 */
class Materiale extends Model
{
	protected $table = 'materiales';
	protected $primaryKey = 'ID_MATERIAL';
	public $timestamps = false;

	protected $casts = [
		'ID_MATERIAL_DEBIL' => 'int',
		'ID_MATERIAL_FUERTE' => 'int',
		'ID_ELEMENTO_DEBIL' => 'int',
		'ID_ELEMENTO_FUERTE' => 'int'
	];

	protected $fillable = [
		'MATERIAL',
		'ID_MATERIAL_DEBIL',
		'ID_MATERIAL_FUERTE',
		'ID_ELEMENTO_DEBIL',
		'ID_ELEMENTO_FUERTE',
		'DESCRIPCION'
	];

	public function objetos()
	{
		return $this->hasMany(Objeto::class, 'ID_MATERIAL');
	}
}
