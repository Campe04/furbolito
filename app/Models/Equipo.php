<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Equipo extends Model{
    public function jugadores():HasMany{
        return $this->hasMany(Jugador::class);
    }

    public function torneo():BelongsToMany{
        return $this->belongsToMany(Torneo::class);
    }
}


