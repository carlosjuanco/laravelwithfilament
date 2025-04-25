<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profesionista;
use App\Models\Competencia;

class CompetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesionista = Profesionista::where('nombre', 'Juan Carlos')->first();

        $competencia1 = new Competencia();
        $competencia1->profesionista_id = $profesionista->id;
        $competencia1->herramienta = 'PHP';
        $competencia1->porcentaje = 95;
        $competencia1->save();

        $competencia2 = new Competencia();
        $competencia2->profesionista_id = $profesionista->id;
        $competencia2->herramienta = 'MySql';
        $competencia2->porcentaje = 90;
        $competencia2->save();

        $competencia3 = new Competencia();
        $competencia3->profesionista_id = $profesionista->id;
        $competencia3->herramienta = 'HTML';
        $competencia3->porcentaje = 95;
        $competencia3->save();

        $competencia4 = new Competencia();
        $competencia4->profesionista_id = $profesionista->id;
        $competencia4->herramienta = 'Javascript';
        $competencia4->porcentaje = 90;
        $competencia4->save();

        $competencia5 = new Competencia();
        $competencia5->profesionista_id = $profesionista->id;
        $competencia5->herramienta = 'CSS';
        $competencia5->porcentaje = 90;
        $competencia5->save();

        $competencia6 = new Competencia();
        $competencia6->profesionista_id = $profesionista->id;
        $competencia6->herramienta = 'Git';
        $competencia6->porcentaje = 90;
        $competencia6->save();

        $competencia7 = new Competencia();
        $competencia7->profesionista_id = $profesionista->id;
        $competencia7->herramienta = 'Linux (Debian, Fedora y Ubuntu)';
        $competencia7->porcentaje = 90;
        $competencia7->save();

        $competencia8 = new Competencia();
        $competencia8->profesionista_id = $profesionista->id;
        $competencia8->herramienta = 'Bash';
        $competencia8->porcentaje = 90;
        $competencia8->save();

        $competencia9 = new Competencia();
        $competencia9->profesionista_id = $profesionista->id;
        $competencia9->herramienta = 'Mantenimiento preventivo y correctivo de pcs';
        $competencia9->porcentaje = 95;
        $competencia9->save();

        $competencia10 = new Competencia();
        $competencia10->profesionista_id = $profesionista->id;
        $competencia10->herramienta = 'Jquery';
        $competencia10->porcentaje = 90;
        $competencia10->save();

        $competencia11 = new Competencia();
        $competencia11->profesionista_id = $profesionista->id;
        $competencia11->herramienta = 'Bootstraps';
        $competencia11->porcentaje = 90;
        $competencia11->save();

        $competencia12 = new Competencia();
        $competencia12->profesionista_id = $profesionista->id;
        $competencia12->herramienta = 'Tinymce';
        $competencia12->porcentaje = 70;
        $competencia12->save();

        $competencia13 = new Competencia();
        $competencia13->profesionista_id = $profesionista->id;
        $competencia13->herramienta = 'Codeigniter';
        $competencia13->porcentaje = 80;
        $competencia13->save();

        $competencia14 = new Competencia();
        $competencia14->profesionista_id = $profesionista->id;
        $competencia14->herramienta = 'Datatables';
        $competencia14->porcentaje = 95;
        $competencia14->save();

        $competencia15 = new Competencia();
        $competencia15->profesionista_id = $profesionista->id;
        $competencia15->herramienta = 'FPDF';
        $competencia15->porcentaje = 95;
        $competencia15->save();

        $competencia16 = new Competencia();
        $competencia16->profesionista_id = $profesionista->id;
        $competencia16->herramienta = 'Wordpress';
        $competencia16->porcentaje = 80;
        $competencia16->save();

        $competencia17 = new Competencia();
        $competencia17->profesionista_id = $profesionista->id;
        $competencia17->herramienta = 'Word';
        $competencia17->porcentaje = 90;
        $competencia17->save();

        $competencia18 = new Competencia();
        $competencia18->profesionista_id = $profesionista->id;
        $competencia18->herramienta = 'Excel';
        $competencia18->porcentaje = 90;
        $competencia18->save();

        $competencia19 = new Competencia();
        $competencia19->profesionista_id = $profesionista->id;
        $competencia19->herramienta = 'Power Point';
        $competencia19->porcentaje = 90;
        $competencia19->save();

        $competencia20 = new Competencia();
        $competencia20->profesionista_id = $profesionista->id;
        $competencia20->herramienta = 'Laravel';
        $competencia20->porcentaje = 90;
        $competencia20->save();

        $competencia21 = new Competencia();
        $competencia21->profesionista_id = $profesionista->id;
        $competencia21->herramienta = 'Composer';
        $competencia21->porcentaje = 95;
        $competencia21->save();

        $competencia22 = new Competencia();
        $competencia22->profesionista_id = $profesionista->id;
        $competencia22->herramienta = 'Docker';
        $competencia22->porcentaje = 95;
        $competencia22->save();

        $competencia23 = new Competencia();
        $competencia23->profesionista_id = $profesionista->id;
        $competencia23->herramienta = 'Java';
        $competencia23->porcentaje = 60;
        $competencia23->save();

        $competencia24 = new Competencia();
        $competencia24->profesionista_id = $profesionista->id;
        $competencia24->herramienta = 'SVN';
        $competencia24->porcentaje = 50;
        $competencia24->save();

        $competencia25 = new Competencia();
        $competencia25->profesionista_id = $profesionista->id;
        $competencia25->herramienta = 'Vue js 3';
        $competencia25->porcentaje = 95;
        $competencia25->save();

        $competencia26 = new Competencia();
        $competencia26->profesionista_id = $profesionista->id;
        $competencia26->herramienta = 'Typescript';
        $competencia26->porcentaje = 60;
        $competencia26->save();

        $competencia27 = new Competencia();
        $competencia27->profesionista_id = $profesionista->id;
        $competencia27->herramienta = 'Vim';
        $competencia27->porcentaje = 60;
        $competencia27->save();

        $competencia28 = new Competencia();
        $competencia28->profesionista_id = $profesionista->id;
        $competencia28->herramienta = 'AWS Cloud9';
        $competencia28->porcentaje = 90;
        $competencia28->save();

        $competencia29 = new Competencia();
        $competencia29->profesionista_id = $profesionista->id;
        $competencia29->herramienta = 'NPM';
        $competencia29->porcentaje = 60;
        $competencia29->save();
    }
}
