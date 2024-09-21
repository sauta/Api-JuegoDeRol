<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmaceneController;
use App\Http\Controllers\ArmaController;
use App\Http\Controllers\ArmaduraController;
use App\Http\Controllers\ArmaUsablePorController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\BotineController;
use App\Http\Controllers\CasaController;
use App\Http\Controllers\CiudadesOComunaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\CofreController;
use App\Http\Controllers\CompatibilidadeController;
use App\Http\Controllers\ConocimientoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HechizoController;
use App\Http\Controllers\HechizosEnelLibroController;
use App\Http\Controllers\HechizoUsablePorController;
use App\Http\Controllers\HogareController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\MaterialeController;
use App\Http\Controllers\MisioneController;
use App\Http\Controllers\MisionesEnCursoController;
use App\Http\Controllers\MochilaController;
use App\Http\Controllers\NiveleController;
use App\Http\Controllers\NombreDelModeloController;
use App\Http\Controllers\ObjetoController;
use App\Http\Controllers\ObjetosEnAlmaceneController;
use App\Http\Controllers\ObjetosEnBodegaController;
use App\Http\Controllers\ObjetosEnBotineController;
use App\Http\Controllers\ObjetosEnCofreController;
use App\Http\Controllers\ObjetosEnInventarioController;
use App\Http\Controllers\ObjetosEnMochilaController;
use App\Http\Controllers\PaiseController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\PersonajesEnEquipoController;
use App\Http\Controllers\PosioneController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\RegioneController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\TerrenoController;
use App\Http\Controllers\TipoDeArmaController;
use App\Http\Controllers\TiposDeHechizoController;
use App\Http\Controllers\TiposDeTransporteController;
use App\Http\Controllers\TipoTransporteTerrenoController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\UbicacioneController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('\user', function (Request $request) {
    return $request->user();
});

Route::resource('AlmaceneController', AlmaceneController::class);
Route::resource('ArmaController', ArmaController::class);
Route::resource('ArmaduraController', ArmaduraController::class);
Route::resource('ArmaUsablePorController', ArmaUsablePorController::class);
Route::resource('BodegaController', BodegaController::class);
Route::resource('BotineController', BotineController::class);
Route::resource('CasaController', CasaController::class);
Route::resource('CiudadesOComunaController', CiudadesOComunaController::class);
Route::resource('ClaseController', ClaseController::class);
Route::resource('CofreController', CofreController::class);
Route::resource('CompatibilidadeController', CompatibilidadeController::class);
Route::resource('ConocimientoController', ConocimientoController::class);
Route::resource('ElementoController', ElementoController::class);
Route::resource('EquipoController', EquipoController::class);
Route::resource('HechizoController', HechizoController::class);
Route::resource('HechizosEnelLibroController', HechizosEnelLibroController::class);
Route::resource('HechizoUsablePorController', HechizoUsablePorController::class);
Route::resource('HogareController', HogareController::class);
Route::resource('InventarioController', InventarioController::class);
Route::resource('LibroController', LibroController::class);
Route::resource('MapaController', MapaController::class);
Route::resource('MaterialeController', MaterialeController::class);
Route::resource('MisioneController', MisioneController::class);
Route::resource('MisionesEnCursoController', MisionesEnCursoController::class);
Route::resource('MochilaController', MochilaController::class);
Route::resource('NiveleController', NiveleController::class);
Route::resource('NombreDelModeloController', NombreDelModeloController::class);
Route::resource('ObjetoController', ObjetoController::class);
Route::resource('ObjetosEnAlmaceneController', ObjetosEnAlmaceneController::class);
Route::resource('ObjetosEnBodegaController', ObjetosEnBodegaController::class);
Route::resource('ObjetosEnBotineController', ObjetosEnBotineController::class);
Route::resource('ObjetosEnCofreController', ObjetosEnCofreController::class);
Route::resource('ObjetosEnInventarioController', ObjetosEnInventarioController::class);
Route::resource('ObjetosEnMochilaController', ObjetosEnMochilaController::class);
Route::resource('PaiseController', PaiseController::class);
Route::resource('PersonajeController', PersonajeController::class);
Route::resource('PersonajesEnEquipoController', PersonajesEnEquipoController::class);
Route::resource('PosioneController', PosioneController::class);
Route::resource('ProvinciaController', ProvinciaController::class);
Route::resource('RazaController', RazaController::class);
Route::resource('RegioneController', RegioneController::class);
Route::resource('SexoController', SexoController::class);
Route::resource('TerrenoController', TerrenoController::class);
Route::resource('TipoDeArmaController', TipoDeArmaController::class);
Route::resource('TiposDeHechizoController', TiposDeHechizoController::class);
Route::resource('TiposDeTransporteController', TiposDeTransporteController::class);
Route::resource('TipoTransporteTerrenoController', TipoTransporteTerrenoController::class);
Route::resource('TransporteController', TransporteController::class);
Route::resource('UbicacioneController', UbicacioneController::class);
Route::resource('UserController', UserController::class);


