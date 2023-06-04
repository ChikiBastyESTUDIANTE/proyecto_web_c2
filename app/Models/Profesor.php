<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\HasMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    
    public function propuestaProfesor():HasMany{
        return $this->BelongsTo(ProfesorPropuesta::class);
    }
}
