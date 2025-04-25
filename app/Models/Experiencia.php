<?php

namespace App\Models;

use App\Casts\FechaFormatoCortoCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experiencia extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'profesionista_id',
        'puesto',
        'fecha_inicio',
        'fecha_termino',
        'empresa',
        'descripcion_puesto',
    ];

    protected $casts = [
        'fecha_inicio' => FechaFormatoCortoCast::class,
        'fecha_termino' => FechaFormatoCortoCast::class,
]   ;

    public function profesionista (): BelongsTo
    {
        return $this->belongsTo(Profesionista::class);
    }
}
