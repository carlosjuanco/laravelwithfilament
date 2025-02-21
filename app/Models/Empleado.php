<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory, SoftDeletes;

    public function nombre_completo(): string
    {
        return $this->nombre . " " . $this->apellido_paterno . " " . $this->apellido_materno;
    }
}
