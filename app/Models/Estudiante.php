<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'codigo',
        'carrera',
        'creditos',
        'correo'
    ];

    public function materias()
    {
        return $this->belongsToMany(Materia::class,'_estudiante__materia')->withPivot('materia_id');
    }
}
