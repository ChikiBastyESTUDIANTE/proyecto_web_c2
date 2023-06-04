<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\BelongsTo;

class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';

    public function profesorProponiendo():BelongsTo{
        return $this->HasMany(Profesor::class);
    }

    public function propuestaComentada2():BelongsTo{ //el nombre es un placeholder profe no me rete XDD
        return $this->HasMany(Propuesta::class);
    }
}
