<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Elemento
 * 
 * @property int $ID_ELEMENTO
 * @property string $ELEMENTO
 * @property int|null $ID_ELEMENTO_DEBIL
 * @property int|null $ID_ELEMENTO_FUERTE
 * @property string|null $DESCRIPCION
 * 
 * @property Collection|TiposDeHechizo[] $tipos_de_hechizos
 *
 * @package App\Models
 */
class Elemento extends Model
{
	protected $table = 'elementos';
	protected $primaryKey = 'ID_ELEMENTO';
	public $timestamps = false;

	protected $casts = [
		'ID_ELEMENTO_DEBIL' => 'int',
		'ID_ELEMENTO_FUERTE' => 'int'
	];

	protected $fillable = [
		'ELEMENTO',
		'ID_ELEMENTO_DEBIL',
		'ID_ELEMENTO_FUERTE',
		'DESCRIPCION'
	];

	public function tipos_de_hechizos()
	{
		return $this->hasMany(TiposDeHechizo::class, 'ID_ELEMENTO');
	}
}
