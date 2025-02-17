<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function altaTorneo(Request $r){
        $torneo = new Torneo();
        $torneo->nombre = $r->get('nombre');
        $torneo->nacional = $r->has('nacional') ? 1 : 0;
        if ($torneo->save()) {
            $msg = true;
        }else{
            $msg = false;
        }
        $data['msg']= $msg;
        $data['obj'] = "Torneo";
        return view('comprobacion',$data);
    }

    public function selectTorneoAnho(Request $request)
{
    $torneoNombre = $request->input('torneo');
    $anho = $request->input('anho');

    $torneo = Torneo::where('nombre', $torneoNombre)->first();

    if (!$torneo) {
        return redirect()->back()->with('error', 'Torneo no encontrado');
    }

    $equipos = $torneo->equipos()->wherePivot('anho', $anho)->get();

    $data = [
        'torneo' => $torneo,
        'equipos' => $equipos,
        'anho' => $anho
    ];

    return view('listar-equipos-torneo', $data);
}

public function formTorneoAnho(){
    $torneos = Torneo::all();
    $data['torneos']= $torneos;
    return view('seleccionar-anho-torneo',$data);
}


}
