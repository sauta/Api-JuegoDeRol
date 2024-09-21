<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonajesEnEquipo
 * 
 * @property int $ID_EQUIPO
 * @property int|null $ID_PERSONAJE
 * 
 * @property Equipo $equipo
 * @property Personaje|null $personaje
 *
 * @package App\Models
 */
class PersonajesEnEquipo extends Model
{
	protected $table = 'personajes_en_equipo';
	protected $primaryKey = 'ID_EQUIPO';
	public $timestamps = false;

	protected $casts = [
		'ID_PERSONAJE' => 'int'
	];

	protected $fillable = [
		'ID_PERSONAJE'
	];

	public function equipo()
	{
		return $this->belongsTo(Equipo::class, 'ID_EQUIPO');
	}

	public function personaje()
	{
		return $this->belongsTo(Personaje::class, 'ID_PERSONAJE');
	}
}
