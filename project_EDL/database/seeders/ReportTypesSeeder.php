<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportTypesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("types_of_reports")->insert([
            ['report_type' => 'Constancia de Trabajo', 'type_description' => 'Acredita que el trabajador en cuestión trabaja con la empresa'],
            ['report_type' => 'Constancia de Salida', 'type_description' => 'Acredita que el trabajador en cuestión dejó de trabajar con la compañía'],
        ]);
    }
}
