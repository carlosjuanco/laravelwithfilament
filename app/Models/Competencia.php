<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Competencia extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'profesionista_id',
        'herramienta',
        'porcentaje',
    ];

    public function profesionista (): BelongsTo
    {
        return $this->belongsTo(Profesionista::class);
    }
}
