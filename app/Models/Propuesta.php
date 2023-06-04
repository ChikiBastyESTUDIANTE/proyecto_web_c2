<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\HasMany;
use Illuminate\Database\Eloquebt\Relations\BelongsTo;

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
}
