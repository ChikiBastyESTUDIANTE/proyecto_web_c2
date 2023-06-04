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
    
    public function comentario():BelongsToMany{
        return $this->BelongsToMany(Propuesta::class);
    }
    
    public function comentarioPivot():BelongsToMany{
        return $this->BelongsToMany(Propuesta::class)->withPivot(['fecha','hora','comentario']);
    }
}
