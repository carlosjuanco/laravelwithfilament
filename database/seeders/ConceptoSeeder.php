<?php

namespace Database\Seeders;

use App\Models\Concepto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConceptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conceptos = [
            ['concepto' =>'Grupos pequeños'],
            ['concepto' =>'Contactos misioneros'],
            ['concepto' =>'Estudios acumulados'],
            ['concepto' =>'Nuevos estudios'],
            ['concepto' =>'Bautismos'],
            ['concepto' =>'Total de personas estudiando'],
            ['concepto' =>'Total de estudios mensuales'],
            ['concepto' =>'Total de bautismos alcanzados'],
            ['concepto' =>'Invitados en la campaña de GP'],
            ['concepto' =>'Invitados en la campaña de iglesia']
        ];
        Concepto::upsert($conceptos, ['concepto']);
    }
}
