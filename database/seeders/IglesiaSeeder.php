<?php

namespace Database\Seeders;

use App\Models\Iglesia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IglesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $iglesias = [
            ['iglesia' =>'Centenario'],
            ['iglesia' =>'Familias en Crecimiento'],
            ['iglesia' =>'Las Flores'],
            ['iglesia' =>'Volcanes'],
            ['iglesia' =>'Donaji'],
            ['iglesia' =>'Jardín'],
            ['iglesia' =>'7 Regiones'],
            ['iglesia' =>'San Luis Beltran'],
            ['iglesia' =>'Zogocho'],
            ['iglesia' =>'Huayapam'],
            ['iglesia' =>'Yatareni'],
            ['iglesia' =>'Tres Cruces'],
        ];
        Iglesia::upsert($iglesias, ['iglesia']);
    }
}
