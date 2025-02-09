<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subarea extends Model
{
    use HasFactory, SoftDeletes;

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
