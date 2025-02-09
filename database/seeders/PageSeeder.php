<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        $page = new Page();
        $page->nombre = 'Escritorio';
        $page->save();

        $page2 = new Page();
        $page2->nombre = 'Areas';
        $page2->save();

        $page2 = new Page();
        $page2->nombre = 'Conceptos';
        $page2->save();
    }
}
