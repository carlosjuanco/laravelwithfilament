<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesionista extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'foto',
        'carrera',
        'correo',
        'telefono',
        'direccion',
        'objetivo',
    ];

    public function nombre_completo(): string
    {
        return $this->nombre . " " . $this->apellido_paterno . " " . $this->apellido_materno;
    }

    public function experiencias (): HasMany
    {
        return $this->hasMany(Experiencia::class);
    }

    public function formaciones (): HasMany
    {
        return $this->hasMany(Formacion::class);
    }

    public function competencias (): HasMany
    {
        return $this->hasMany(Competencia::class);
    }
}
