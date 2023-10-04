<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Dario Suarez Lazarte",
            "email" => "dario@correo.com",
            "password" => bcrypt("12345678"),
        ]);

        User::create([
            "name" => "Dardo Suarez Ventura",
            "email" => "dardo@correo.com",
            "password" => bcrypt("12345678"),
        ]);
    }
}
