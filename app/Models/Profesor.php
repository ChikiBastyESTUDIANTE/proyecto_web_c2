<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    
    public function comentario():BelongsToMany{
        return $this->BelongsToMany(Propuesta::class);
    }

    public function comentarioConPivot():BelongsToMany{
        return $this->BelongsToMany(Propuesta::class)->withPivot(['fecha','hora','comentario']);
    }
}
