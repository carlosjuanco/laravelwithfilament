<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('nombre', 'Creadores del sistema')->get()->first();

        $user = User::where('name', 'juan')->get()->first();
        $user->role_id = $role->id;
        $user->save();
    }
}
