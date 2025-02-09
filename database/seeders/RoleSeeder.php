<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->nombre = 'Creadores del sistema';
        $role->descripcion = 'Son los usuarios que crean todo el sistema';
        $role->save();
    }
}
