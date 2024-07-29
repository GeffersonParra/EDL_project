<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $useradmin = User::create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin"),
            "tipo" => 1,
        ]);

        $useradmin = User::create([
            "name" => "Empleado",
            "email" => "empleado@empleado.com",
            "password" => Hash::make("empleado"),
            "tipo" => 2,
        ]);
    }
}
