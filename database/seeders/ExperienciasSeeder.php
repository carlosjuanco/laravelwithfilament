<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profesionista;
use App\Models\Experiencia;

class ExperienciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesionista = Profesionista::where('nombre', 'Juan Carlos')->first();

        $primera_experiencia = new Experiencia();
        $primera_experiencia->profesionista_id = $profesionista->id;
        $primera_experiencia->puesto = 'Freelancer';
        $primera_experiencia->fecha_inicio = '2015-11-20';
        $primera_experiencia->fecha_termino = '2016-07-03';
        $primera_experiencia->empresa = 'Asesores Fiscales';
        $primera_experiencia->descripcion_puesto = 'Mantenimiento y rediseño de su página y el desarrollo de sus procesos de Outsourcing';
        $primera_experiencia->save();

        $segunda_experiencia = new Experiencia();
        $segunda_experiencia->profesionista_id = $profesionista->id;
        $segunda_experiencia->puesto = 'Programador';
        $segunda_experiencia->fecha_inicio = '2016-07-06';
        $segunda_experiencia->fecha_termino = '2017-02-14';
        $segunda_experiencia->empresa = 'Distribuidora Ludi, S.A. de C.V.';
        $segunda_experiencia->descripcion_puesto = 'Desarrollo de software, mantenimiento preventivo y correctivo de sus PCs. Mantenimiento de sus puntos de venta';
        $segunda_experiencia->save();

        $tercera_experiencia = new Experiencia();
        $tercera_experiencia->profesionista_id = $profesionista->id;
        $tercera_experiencia->puesto = 'Programador';
        $tercera_experiencia->fecha_inicio = '2017-03-23';
        $tercera_experiencia->fecha_termino = '2018-03-11';
        $tercera_experiencia->empresa = 'Itwebsolutions';
        $tercera_experiencia->descripcion_puesto = 'Análisis y desarrollo de software en CodeIgniter, mantenimiento preventivo y correctivo de PCs';
        $tercera_experiencia->save();

        $cuarto_experiencia = new Experiencia();
        $cuarto_experiencia->profesionista_id = $profesionista->id;
        $cuarto_experiencia->puesto = 'Programador';
        $cuarto_experiencia->fecha_inicio = '2018-07-16';
        $cuarto_experiencia->fecha_termino = '2021-01-15';
        $cuarto_experiencia->empresa = 'SEFIN www.finanzasoaxaca.gob.mx';
        $cuarto_experiencia->descripcion_puesto = 'Mantenimiento de los modulos del área de tesorería';
        $cuarto_experiencia->save();

        $quinta_experiencia = new Experiencia();
        $quinta_experiencia->profesionista_id = $profesionista->id;
        $quinta_experiencia->puesto = 'Programador y Jefe de soporte técnico';
        $quinta_experiencia->fecha_inicio = '2022-01-01';
        $quinta_experiencia->fecha_termino = '2022-11-04';
        $quinta_experiencia->empresa = 'ICCODISA Ingenieros civiles, construcción, diseño, supervisión y asesoría s.a de c.v.';
        $quinta_experiencia->descripcion_puesto = 'Análisis y desarrollo de software, mantenimiento preventivo y correctivo de PCs';
        $quinta_experiencia->save();

        $sexta_experiencia = new Experiencia();
        $sexta_experiencia->profesionista_id = $profesionista->id;
        $sexta_experiencia->puesto = 'Programador Full Stack';
        $sexta_experiencia->fecha_inicio = '2022-11-09';
        $sexta_experiencia->fecha_termino = '2023-04-28';
        $sexta_experiencia->empresa = 'TAAG LABS S.A. DE C.V.';
        $sexta_experiencia->descripcion_puesto = 'Desarrollo en Laravel 7.30 y Vue 2';
        $sexta_experiencia->save();

        $septima_experiencia = new Experiencia();
        $septima_experiencia->profesionista_id = $profesionista->id;
        $septima_experiencia->puesto = 'Programador y Jefe de soporte técnico';
        $septima_experiencia->fecha_inicio = '2023-08-01';
        $septima_experiencia->fecha_termino = '2024-12-27';
        $septima_experiencia->empresa = 'LAKONA DE CHAMBE';
        $septima_experiencia->descripcion_puesto = 'Análisis y desarrollo de software, mantenimiento preventivo y correctivo de PCs';
        $septima_experiencia->save();

        $octava_experiencia = new Experiencia();
        $octava_experiencia->profesionista_id = $profesionista->id;
        $octava_experiencia->puesto = 'Programador y Jefe de soporte técnico';
        $octava_experiencia->fecha_inicio = '2024-01-01';
        $octava_experiencia->fecha_termino = '2025-04-15';
        $octava_experiencia->empresa = 'ICCODISA Ingenieros civiles, construcción, diseño, supervisión y asesoría s.a de c.v.';
        $octava_experiencia->descripcion_puesto = 'Análisis y desarrollo de software, mantenimiento preventivo y correctivo de PCs';
        $octava_experiencia->save();
    }
}
