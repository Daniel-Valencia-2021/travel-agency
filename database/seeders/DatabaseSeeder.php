<?php

namespace Database\Seeders;

use App\Models\Paquetes;
use App\Models\Profesores;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Paquetes::factory(10)->create();
         Profesores::factory(10)->create();
    }
}
