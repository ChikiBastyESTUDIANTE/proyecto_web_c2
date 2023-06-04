<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\BelongsToMany;

class ProfesorPropuesta extends Model //Creo que mejor se hubiera llamado comentarios 
{
    use HasFactory;
    protected $table = 'profesor_propuesta';

    public function profesorProponiendo():BelongsToMany{
        return $this->HasMany(Profesor::class);
    }

    public function propuestaComentada2():BelongsToMany{ //el nombre es un placeholder profe no me rete XDD
        return $this->HasMany(Propuesta::class);
    }
}
