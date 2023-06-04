<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\HasMany;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;

    public function propuesta():HasMany{
        return $this->belongsTo(Propuesta::class,'estudiante_rut','rut');
    }
}
