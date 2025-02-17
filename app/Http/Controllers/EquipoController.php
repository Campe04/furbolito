<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function getEquipos()
    {
        $equipos = Equipo::all();
        $data['equipos'] = $equipos;
        return view('listar-equipos', $data);
    }

    public function altaEquipo(Request $r)
    {
        $r->validate([
            'nombre' => 'required|string|max:50',
            'num_socios' => 'required|integer',
        ]);

        $equipo = new Equipo();
        $equipo->nombre = $r->get('nombre');
        $equipo->num_socios = $r->get('num_socios');

        if ($equipo->save()) {
            $data = [
                'msg' => 'Equipo creado correctamente',
                'obj' => 'Equipo',
                'equipo_id' => $equipo->id
            ];
        } else {
            $data = [
                'msg' => 'Fallo al registrar el Equipo',
                'obj' => 'Equipo'
            ];
        }

        return view('comprobacion', $data);
    }
}
