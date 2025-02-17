<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function altaJugador(Request $r)
{
    $r->validate([
        'nombre' => 'required|string|max:20',
        'apellidos' => 'required|string|max:50',
        'dorsal' => 'required|integer|min:1',
        'f_naci' => 'required|date',
        'equipo_id' => 'required|exists:equipos,id'
    ]);

    $jugador = new Jugador();
    $jugador->nombre = $r->get('nombre');
    $jugador->apellidos = $r->get('apellidos');
    $jugador->dorsal = $r->get('dorsal');
    $jugador->f_naci = $r->get('f_naci');
    $jugador->equipo_id = $r->get('equipo_id');

    if ($jugador->save()) {
        $data['msg'] = 'Jugador creado correctamente';
        $data['obj'] = 'Jugador';
        $data['equipo_id'] = $jugador->equipo_id;
    } else {
        $data['msg'] = 'Fallo al registrar el Jugador';
        $data['obj'] = 'Jugador';
    }

    return view('comprobacion', $data);
}

    


    public function getEquiposJugadores()
    {
        $equipos = Equipo::all();
        $data['equipos'] = $equipos;
        return view('listar-equipos-jugadores', $data);
    }

    public function getJugadores($id_equipo)
    {
        $jugadores = Jugador::where('equipo_id', $id_equipo)->get();
        $equipo = Equipo::find($id_equipo);

        $data['jugadores'] = $jugadores;
        $data['equipo'] = $equipo;
        return view('jugadores-equipo', $data);
    }

    public function formularioAltaJugador()
    {
        $equipos = Equipo::all();
        return view('alta-jugador', compact('equipos'));
    }
}
