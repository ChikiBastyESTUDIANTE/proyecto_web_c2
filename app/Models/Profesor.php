<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    
    public function propuestaProfesor():BelongsTo{
        return $this->BelongsTo(ProfesorPropuesta::class);
    }
}
