<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formacion extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'profesionista_id',
        'escuela',
        'direccion',
        'periodo',
        'titulo',
    ];

    public function profesionista (): BelongsTo
    {
        return $this->belongsTo(Profesionista::class);
    }
}
