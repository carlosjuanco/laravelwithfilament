<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $systemCreatorRole = new Role();
        $systemCreatorRole->name = "Creador del sistema";
        $systemCreatorRole->description = "Usuario principal que siempre existirá";
        $systemCreatorRole->save();

        $user = new User();
        $user->name = 'Juan Carlos';
        $user->email = 'carlosjuancho328@gmail.com';
        $user->password = Hash::make('password');
        $user->role_id = $systemCreatorRole->id;

        $user->save();
    }
}
