<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\HasMany;
use Illuminate\Database\Eloquebt\Relations\BelongsTo;
use Illuminate\Database\Eloquebt\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function proponedor():BelongsTo{
        return $this->HasMany(Estudiante::class);
    }

    public function propuestaComentada():HasMany{
        return $this->BelongsTo(ProfesorPropuesta::class);
    }

    public function comentarioPivot():BelongsToMany{
        return $this->BelongsToMany(Profesor::class)->withPivot(['fecha','hora','comentario']);
    }
}
