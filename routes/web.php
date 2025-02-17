<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('main');
})->name('inicio');

Route::get('/comprobacion', function () {return view('comprobacion');})->name('comprobacion');

Route::get('/torneo', function () {return view('torneos');})->name('torneo-view');

Route::get('/equipo', function() {return view('equipos');})->name('equipo-view');


Route::get('/equipo/listar',[EquipoController::class, 'getEquipos'])->name('verEquipos');

Route::get('/equipo/formAlta',function(){return view('alta-equipo');})->name('formEquipo');
Route::get('/equipo/alta',[EquipoController::class, 'altaEquipo'])->name('altaEquipo');

Route::get('/jugador/equipoJugador',[JugadorController::class,'getEquiposJugadores'])->name('verEquiposJugadores');
Route::get('/jugador/{id_equipo}/jugadores', [JugadorController::class, 'getJugadores'])->name('verJugadores');

Route::get('/jugadores/crear', [JugadorController::class, 'formularioAltaJugador'])->name('formAltaJugador');
Route::post('/jugadores/crear', [JugadorController::class, 'altaJugador'])->name('altaJugador');


Route::get('/torneo/listarEquipos/',[TorneoController::class, 'selectTorneoAnho'])->name('selectTorneoAnho');
Route::get('/torneo/filterAnho',[TorneoController::class, 'formTorneoAnho'])->name('formTorneoAnho');

Route::get('/torneo/formAlta',function(){
    return view('alta-torneo');
})->name('formTorneo');
Route::get('/torneo/alta', [TorneoController::class, 'altaTorneo']);

Route::get('/torneo/agregarEquipo',function(){
    return view('agregar-equipo');
})->name('agregarEquipoTorneo');

