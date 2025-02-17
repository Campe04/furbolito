<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('main');
});

Route::get('/comprobacion', function () {return view('comprobacion');})->name('comprobacion');

Route::get('/torneo', function () {return view('torneo');})->name('torneo-view');

Route::get('/equipo', function() {return view('equipos');})->name('equipo-view');


Route::get('/equipo/listar',[EquipoController::class, 'getEquipos'])->name('verEquipos');

Route::get('/equipo/formAlta',function(){return view('alta-equipo');})->name('formEquipo');
Route::get('/equipo/alta',[EquipoController::class, 'altaEquipo'])->name('altaEquipo');

Route::get('/equipo/jugador/listar',[EquipoController::class,'getEquiposJugadores'])->name('verEquiposJugadores');
Route::get('/equipo/jugador/listar',[EquipoController::class,'getJugadores'])->name('verJugadores');

Route::get('/equipo/jugador/formAlta', function(){return view('alta-jugador');})->name('formJugador');
Route::get('/equipo/jugador/alta', [EquipoController::class, 'altaJugador'])->name('altaJugador');


Route::get('/torneo/listarEquipos/{anho}',function(){
    return view('listar-equipos-torneo');
})->name('listar-equipos-torneo');

Route::get('/torneo/alta',function(){
    return view('alta-torneo');
})->name('altaTorneo');

Route::get('/torneo/agregarEquipo',function(){
    return view('agregar-equipo');
})->name('agregarEquipoTorneo');

