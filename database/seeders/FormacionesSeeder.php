<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profesionista;
use App\Models\Formacion;

class FormacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesionista = Profesionista::where('nombre', 'Juan Carlos')->first();

        $formacion = new Formacion();
        $formacion->profesionista_id = $profesionista->id;
        $formacion->escuela = 'Instituto Tecnológico del Valle de Oaxaca';
        $formacion->direccion = 'Ex hacienda Nazareno, C.P. 71230 Santa Cruz Xoxocotlan, Oaxaca de Juárez';
        $formacion->periodo = 'Agosto-2009 A Diciembre de 2015';
        $formacion->titulo = 'Pasante en la Lic. Informática';
        $formacion->save();
    }
}
