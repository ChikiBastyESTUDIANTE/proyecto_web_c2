<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\BelongsTo;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    
    public function propuestaProfesor():BelongsTo{
        return $this->BelongsTo(ProfesorPropuesta::class);
    }
}
