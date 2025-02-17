<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'equipo_torneo')
                    ->withPivot('anho');
    }
}

