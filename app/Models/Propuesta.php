<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function proponedor():HasMany{
        return $this->HasMany(Estudiante::class);
    }
}
