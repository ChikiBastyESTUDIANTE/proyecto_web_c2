<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\HasMany;
use Illuminate\Database\Eloquebt\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    
    public function propuestaProfesor():HasMany{
        return $this->BelongsTo(ProfesorPropuesta::class);
    }

    public function comentarioPivot():BelongsToMany{
        return $this->BelongsToMany(Propuesta::class)->withPivot(['fecha','hora','comentario']);
    }
}
