<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TipoVeiculoSeeder;
use Database\Seeders\StatusVeiculoSeeder;
use Database\Seeders\LojaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatusVeiculoSeeder::class,
            TipoVeiculoSeeder::class,
            LojaSeeder::class
        ]);
    }
}
