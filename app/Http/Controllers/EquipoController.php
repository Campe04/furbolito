<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;

class EquipoController extends Controller
{
    public function getEquipos(){
        $equipos = Equipo::all();
        $data['equipos'] = $equipos;
        return view('listar-equipos',$data);
    }

    public function altaEquipo(Request $r){
        $equipo = new Equipo();
        $equipo->nombre = $r->get('nombre');
        $equipo->num_socios = $r->get('numSocios');
        if ($equipo->save()) {
            $msg = true;
        }else{
            $msg = false;
        }
        $data['msg']= $msg;
        $data['obj'] = "Equipo";
        return view('comprobacion',$data);;
    }

    public function altaJugador(Request $r){
        $jugador = new Jugador();
        $jugador->nombre = $r->get('nombre');
        $jugador->apellidos = $r->get('apellidos');
        $jugador->dorsal = $r->get('dorsal');
        if($jugador->save()){
            $msg = true;
        }else {
            $msg = false;
        }
        $data['msg'] = $msg;
        $data['obj'] = "Jugador";
        return view('comprobacion',$data);
    }

    public function getEquiposJugadores(){
        $equipos = Equipo::all();
        $data['equipos'] = $equipos;
        return view('listar-equipos-jugadores',$data);
    }

    public function getJugadores($id_equipo){
        $jugadores = Jugador::where('equipo_id',$id_equipo)->get();
        $equipo = Equipo::find('id',$id_equipo)->get();

        $data['jugadores'] =  $jugadores;
        $data['equipo'] = $equipo;
        return view('jugadores-equipo',$data);
    }
}
