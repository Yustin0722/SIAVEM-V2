<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('unidades', App\Http\Controllers\UnidadeController::class)->middleware('auth');
Route::get('unidad', [App\Http\Controllers\UnidadeController::class, 'avisoRTV'])->middleware('auth')->name('unidad');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class)->middleware('auth');
Route::resource('tracciones', App\Http\Controllers\TraccioneController::class)->middleware('auth');
Route::resource('combustibles', App\Http\Controllers\CombustibleController::class)->middleware('auth');
Route::resource('tlicencias', App\Http\Controllers\TlicenciaController::class)->middleware('auth');
Route::resource('talleres', App\Http\Controllers\TallereController::class)->middleware('auth');
Route::resource('preventivos', App\Http\Controllers\PreventivoController::class)->middleware('auth');
Route::resource('correctivos', App\Http\Controllers\CorrectivoController::class)->middleware('auth');
Route::resource('estados', App\Http\Controllers\EstadoController::class)->middleware('auth');
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::get('VerificacionDeLicencia', [App\Http\Controllers\EmpleadoController::class, 'avisoLicencia'])->middleware('auth')->name('licencias');
Route::resource('chequeos', App\Http\Controllers\ChequeoController::class)->middleware('auth');
Route::resource('formularios', App\Http\Controllers\FormularioController::class)->middleware('auth');
Route::get('estado/{idSolicitud}/{token}', [App\Http\Controllers\FormularioController::class, 'vistaEstado'])->middleware('auth')->name('vistaEstado');
Route::get('pdf/{id}', [App\Http\Controllers\FormularioController::class, 'generarPDF'])->middleware('auth')->name('pdf');
Route::post('cambiarEstado/{id}', [App\Http\Controllers\FormularioController::class, 'respuestaSolicitud'])->middleware('auth')->name('cambiarEstado');
Route::resource('motocicletas', App\Http\Controllers\MotocicletaController::class)->middleware('auth');




    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
