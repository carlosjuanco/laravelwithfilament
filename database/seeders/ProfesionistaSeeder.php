<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profesionista;

class ProfesionistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesionista = new Profesionista();
        $profesionista->nombre = 'Juan Carlos';
        $profesionista->apellido_paterno = 'Rojas';
        $profesionista->apellido_materno = 'Garcia';
        $profesionista->foto = '01JSJ5QDVWM3ZZ4AQGKGF0FK4B.jpg';
        $profesionista->carrera = 'Pasante en la Lic. en Informática';
        $profesionista->correo = 'carlosjuancho328@gmail.com';
        $profesionista->telefono = '951 213 0374';
        $profesionista->direccion = '1a Privada de Pochutla #5, Col. Guelaguetza, Santa Maria Atzompa, Oaxaca de Juárez, C.P. 71222';
        $profesionista->objetivo = 'Quiero ser un gato';

        $profesionista->save();
    }
}
