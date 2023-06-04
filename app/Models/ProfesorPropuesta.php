<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';

    public function profesorProponiendo():HasMany{
        return $this->HasMany(Profesor::class);
    }

    public function propuestaComentada2():HasMany{ //el nombre es un placeholder profe no me rete XDD
        return $this->HasMany(Propuesta::class);
    }
}
