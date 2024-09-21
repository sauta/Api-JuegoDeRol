<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personaje
 * 
 * @property int $ID_PERSONAJE
 * @property string $NOMBRE
 * @property string $NOMBRE_COMPLETO
 * @property int $VIDA
 * @property int $MANA
 * @property int $VIDA_MAX
 * @property int $MANA_MAX
 * @property int $FUERZA
 * @property int $INTELIGENCIA
 * @property int $DESTREZA
 * @property int $EDAD
 * @property int $EXPERIENCIA
 * @property int $ORO
 * @property Carbon $FECHA_NACIMIENTO
 * @property Carbon|null $FECHA_POSTMORTE
 * @property int|null $ID_CASA
 * @property int|null $ID_HOGAR
 * @property int|null $ID_UBICACION
 * @property int|null $ID_RAZA
 * @property int|null $ID_CLASE
 * @property int $ID_SEXO
 * @property int $ID_NIVEL
 * @property int $ID_ARMADURA_EQUIPADA
 * @property int $ID_ARMA_EQUIPADA
 * @property int $ID_HECHIZO_EQUIPADO
 * @property int $ID_PERSONAJE_PADRE
 * @property int $ID_PERSONAJE_MADRE
 * @property int|null $ID_PERSONAJE_PAREJA
 * @property int|null $ID_MOCHILA_EQUIPADA
 * @property int|null $ID_INVENTARIO_PERSONAJE
 * @property int|null $ID_TRANSPORTE
 * 
 * @property Arma $arma
 * @property Armadura $armadura
 * @property Casa|null $casa
 * @property Clase|null $clase
 * @property Hechizo $hechizo
 * @property Hogare|null $hogare
 * @property Nivele $nivele
 * @property Raza|null $raza
 * @property Sexo $sexo
 * @property Transporte|null $transporte
 * @property Ubicacione|null $ubicacione
 * @property Conocimiento $conocimiento
 * @property Collection|Equipo[] $equipos
 * @property Collection|Inventario[] $inventarios
 * @property MisionesEnCurso $misiones_en_curso
 * @property Collection|Mochila[] $mochilas
 *
 * @package App\Models
 */
class Personaje extends Model
{
	protected $table = 'personajes';
	protected $primaryKey = 'ID_PERSONAJE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PERSONAJE' => 'int',
		'VIDA' => 'int',
		'MANA' => 'int',
		'VIDA_MAX' => 'int',
		'MANA_MAX' => 'int',
		'FUERZA' => 'int',
		'INTELIGENCIA' => 'int',
		'DESTREZA' => 'int',
		'EDAD' => 'int',
		'EXPERIENCIA' => 'int',
		'ORO' => 'int',
		'FECHA_NACIMIENTO' => 'datetime',
		'FECHA_POSTMORTE' => 'datetime',
		'ID_CASA' => 'int',
		'ID_HOGAR' => 'int',
		'ID_UBICACION' => 'int',
		'ID_RAZA' => 'int',
		'ID_CLASE' => 'int',
		'ID_SEXO' => 'int',
		'ID_NIVEL' => 'int',
		'ID_ARMADURA_EQUIPADA' => 'int',
		'ID_ARMA_EQUIPADA' => 'int',
		'ID_HECHIZO_EQUIPADO' => 'int',
		'ID_PERSONAJE_PADRE' => 'int',
		'ID_PERSONAJE_MADRE' => 'int',
		'ID_PERSONAJE_PAREJA' => 'int',
		'ID_MOCHILA_EQUIPADA' => 'int',
		'ID_INVENTARIO_PERSONAJE' => 'int',
		'ID_TRANSPORTE' => 'int'
	];

	protected $fillable = [
		'NOMBRE',
		'NOMBRE_COMPLETO',
		'VIDA',
		'MANA',
		'VIDA_MAX',
		'MANA_MAX',
		'FUERZA',
		'INTELIGENCIA',
		'DESTREZA',
		'EDAD',
		'EXPERIENCIA',
		'ORO',
		'FECHA_NACIMIENTO',
		'FECHA_POSTMORTE',
		'ID_CASA',
		'ID_HOGAR',
		'ID_UBICACION',
		'ID_RAZA',
		'ID_CLASE',
		'ID_SEXO',
		'ID_NIVEL',
		'ID_ARMADURA_EQUIPADA',
		'ID_ARMA_EQUIPADA',
		'ID_HECHIZO_EQUIPADO',
		'ID_PERSONAJE_PADRE',
		'ID_PERSONAJE_MADRE',
		'ID_PERSONAJE_PAREJA',
		'ID_MOCHILA_EQUIPADA',
		'ID_INVENTARIO_PERSONAJE',
		'ID_TRANSPORTE'
	];

	public function arma()
	{
		return $this->belongsTo(Arma::class, 'ID_ARMA_EQUIPADA');
	}

	public function armadura()
	{
		return $this->belongsTo(Armadura::class, 'ID_ARMADURA_EQUIPADA');
	}

	public function casa()
	{
		return $this->belongsTo(Casa::class, 'ID_CASA');
	}

	public function clase()
	{
		return $this->belongsTo(Clase::class, 'ID_CLASE');
	}

	public function hechizo()
	{
		return $this->belongsTo(Hechizo::class, 'ID_HECHIZO_EQUIPADO');
	}

	public function hogare()
	{
		return $this->belongsTo(Hogare::class, 'ID_HOGAR');
	}

	public function nivele()
	{
		return $this->belongsTo(Nivele::class, 'ID_NIVEL');
	}

	public function raza()
	{
		return $this->belongsTo(Raza::class, 'ID_RAZA');
	}

	public function sexo()
	{
		return $this->belongsTo(Sexo::class, 'ID_SEXO');
	}

	public function transporte()
	{
		return $this->belongsTo(Transporte::class, 'ID_TRANSPORTE');
	}

	public function ubicacione()
	{
		return $this->belongsTo(Ubicacione::class, 'ID_UBICACION');
	}

	public function conocimiento()
	{
		return $this->hasOne(Conocimiento::class, 'ID_PERSONAJE');
	}

	public function equipos()
	{
		return $this->belongsToMany(Equipo::class, 'personajes_en_equipo', 'ID_PERSONAJE', 'ID_EQUIPO');
	}

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'ID_PERSONAJE');
	}

	public function misiones_en_curso()
	{
		return $this->hasOne(MisionesEnCurso::class, 'ID_PERSONAJE');
	}

	public function mochilas()
	{
		return $this->hasMany(Mochila::class, 'ID_PERSONAJE');
	}
}
