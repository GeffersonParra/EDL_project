<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("occupations")->insert([
            ['occupation_name' => 'Desarrollador', 'occupation_description' => 'Desarrolla Software'],
            ['occupation_name' => 'RRHH', 'occupation_description' => 'Encargad(@) de los recursos humanos de la compañía']
        ]
        );
    }
}
