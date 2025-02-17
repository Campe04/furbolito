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

}
