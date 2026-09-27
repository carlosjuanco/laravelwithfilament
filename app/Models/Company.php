<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'tipo',
        'paternal_surname',
        'maternal_surname',
    ];

    protected $appends = ['nombre_completo']; // Para que siempre esté disponible

    /**
     * 📌 Accessor: nombre_completo
     *
     * Concatena los campos `name`, `paternal_surname` y `maternal_surname`
     * cuando el campo `tipo` es igual a "Persona física". En cualquier otro
     * caso, devuelve únicamente el valor de `name`.
     *
     * 🔍 Puntos importantes:
     * - `array_filter` elimina valores null, '' o 0, evitando espacios dobles
     *   si algún apellido no está capturado.
     * - `trim` limpia espacios sobrantes al inicio y al final del resultado.
     * - `implode(' ', ...)` une los campos con un espacio simple.
     * - Si `tipo` no es "Persona física", solo se devuelve `name`
     * - Para exponerlo en JSON, agregar 'nombre_completo' al arreglo
     *   $appends del modelo.
     *
     * Uso:
     *   $modelo->nombre_completo;
     * 
     * 📚 FUENTE
     *  https://chat.deepseek.com/share/feacazh31li1ptta40
     */

    public function getNombreCompletoAttribute()
    {
        // Validamos que sea persona física para incluir los apellidos
        if ($this->tipo === 'Persona física') {
            return trim(implode(' ', array_filter([
                $this->name,
                $this->paternal_surname,
                $this->maternal_surname,
            ])));
        }

        return $this->name;
    }
}