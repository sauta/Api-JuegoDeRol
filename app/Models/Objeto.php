<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Objeto
 * 
 * @property string $ID_OBJETO
 * @property string $NOMBRE_OBJETO
 * @property int $PRECIO
 * @property int $PESO
 * @property string $TIPO_OBJETO
 * @property int $ID_MATERIAL
 * 
 * @property Materiale $materiale
 * @property Collection|Armadura[] $armaduras
 * @property Collection|Arma[] $armas
 * @property Collection|Libro[] $libros
 * @property Collection|Mapa[] $mapas
 * @property Collection|Misione[] $misiones
 * @property Collection|Mochila[] $mochilas
 * @property Collection|Almacene[] $almacenes
 * @property Collection|Bodega[] $bodegas
 * @property Collection|Botine[] $botines
 * @property Collection|Cofre[] $cofres
 * @property Collection|Inventario[] $inventarios
 * @property Collection|Posione[] $posiones
 * @property Collection|Transporte[] $transportes
 *
 * @package App\Models
 */
class Objeto extends Model
{
	protected $table = 'objetos';
	protected $primaryKey = 'ID_OBJETO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRECIO' => 'int',
		'PESO' => 'int',
		'ID_MATERIAL' => 'int'
	];

	protected $fillable = [
		'NOMBRE_OBJETO',
		'PRECIO',
		'PESO',
		'TIPO_OBJETO',
		'ID_MATERIAL'
	];

	public function materiale()
	{
		return $this->belongsTo(Material::class, 'ID_MATERIAL');
	}

	public function armaduras()
	{
		return $this->hasMany(Armadura::class, 'ID_OBJETO');
	}

	public function armas()
	{
		return $this->hasMany(Arma::class, 'ID_OBJETO');
	}

	public function libros()
	{
		return $this->hasMany(Libro::class, 'ID_OBJETO');
	}

	public function mapas()
	{
		return $this->hasMany(Mapa::class, 'ID_OBJETO');
	}

	public function misiones()
	{
		return $this->hasMany(Mision::class, 'ID_OBJETO');
	}

	public function mochilas()
	{
		return $this->belongsToMany(Mochila::class, 'objetos_en_mochila', 'ID_OBJETO', 'ID_MOCHILA')
					->withPivot('CANTIDAD');
	}

	public function almacenes()
	{
		return $this->belongsToMany(Almacen::class, 'objetos_en_almacenes', 'ID_OBJETO', 'ID_ALMACEN')
					->withPivot('CANTIDAD');
	}

	public function bodegas()
	{
		return $this->belongsToMany(Bodega::class, 'objetos_en_bodegas', 'ID_OBJETO', 'ID_BODEGA')
					->withPivot('CANTIDAD');
	}

	public function botines()
	{
		return $this->belongsToMany(Botin::class, 'objetos_en_botines', 'ID_OBJETO', 'ID_BOTIN')
					->withPivot('CANTIDAD');
	}

	public function cofres()
	{
		return $this->belongsToMany(Cofre::class, 'objetos_en_cofres', 'ID_OBJETO', 'ID_COFRE')
					->withPivot('CANTIDAD');
	}

	public function inventarios()
	{
		return $this->belongsToMany(Inventario::class, 'objetos_en_inventarios', 'ID_OBJETO', 'ID_INVENTARIO')
					->withPivot('CANTIDAD');
	}

	public function posiones()
	{
		return $this->hasMany(Posion::class, 'ID_OBJETO');
	}

	public function transportes()
	{
		return $this->hasMany(Transporte::class, 'ID_OBJETO');
	}
}
