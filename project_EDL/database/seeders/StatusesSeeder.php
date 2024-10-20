<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("statuses")->insert([
            ['status_name' => 'CONTRATADO'],
            ['status_name' => 'DESPEDIDO']
        ]);
    }
}
