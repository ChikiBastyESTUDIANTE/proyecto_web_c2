<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function proponedor():BelongsTo{
        return $this->belongsTo(Estudiante::class,'estudiante_rut','rut'); //CREO QUE ESTO ESTA BIEN??
    }

    public function comentarioProfesor():BelongsToMany{
        return $this->BelongsToMany(Profesor::class);
    }

    public function comentarioProfesorConPivot():BelongsToMany{
        return $this->BelongsToMany(Profesor::class)->withPivot(['fecha','hora','comentario']);
    }
}
