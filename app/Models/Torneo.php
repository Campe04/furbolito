<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Torneo extends Model
{
    public function equipos():HasMany{
        return $this->hasMany(Equipo::class);
    }
}
