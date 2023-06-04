<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquebt\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;

    public function propuesta():BelongsTo{
        return $this->belongsTo(Propuesta::class);
    }
}
