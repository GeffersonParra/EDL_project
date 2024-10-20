<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("types_of_id")->insert([
            ['id_type' => 'CC', 'id_description' => 'Cédula de ciudadanía'],
            ['id_type' => 'CE', 'id_description' => 'Cédula de extranjería']
        ]);
    }
}
