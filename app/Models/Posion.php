<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Posione
 * 
 * @property int $ID_POSION
 * @property string|null $ID_OBJETO
 * @property string $NOMBRE_POSION
 * @property int|null $NIVEL_REQUERIDO
 * @property int $REGENERA_MANA
 * @property int $REGENERA_VIDA
 * 
 * @property Objeto|null $objeto
 *
 * @package App\Models
 */
class Posion extends Model
{
	protected $table = 'posiones';
	protected $primaryKey = 'ID_POSION';
	public $timestamps = false;

	protected $casts = [
		'NIVEL_REQUERIDO' => 'int',
		'REGENERA_MANA' => 'int',
		'REGENERA_VIDA' => 'int'
	];

	protected $fillable = [
		'ID_OBJETO',
		'NOMBRE_POSION',
		'NIVEL_REQUERIDO',
		'REGENERA_MANA',
		'REGENERA_VIDA'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'ID_OBJETO');
	}
}
