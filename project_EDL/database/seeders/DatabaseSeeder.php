<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(IdTypesSeeder::class);
        $this->call(OccupationsSeeder::class);
        $this->call(ReportTypesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(StatusesSeeder::class);
    }
}
