<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sexo
 * 
 * @property int $ID_SEXO
 * @property string $SEXO
 * 
 * @property Collection|Personaje[] $personajes
 *
 * @package App\Models
 */
class Sexo extends Model
{
	protected $table = 'sexos';
	protected $primaryKey = 'ID_SEXO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SEXO' => 'int'
	];

	protected $fillable = [
		'SEXO'
	];

	public function personajes()
	{
		return $this->hasMany(Personaje::class, 'ID_SEXO');
	}
}
