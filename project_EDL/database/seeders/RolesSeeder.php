<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("roles")->insert([
            ['role_name' => 'Administrador', 'role_description' => 'Encargad(@) de administrar los datos dentro del sistema'],
            ['role_name' => 'Empleado', 'role_description' => 'Usuario común, no tiene permisos sobre los datos dentro del sistema']
        ]
        );
    }
}
