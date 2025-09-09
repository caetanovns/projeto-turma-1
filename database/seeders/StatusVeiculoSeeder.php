<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusVeiculo;

class StatusVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['nome' => 'Disponível'],
            ['nome' => 'Em Manutenção'],
            ['nome' => 'Alugado'],
            ['nome' => 'Indisponível'],
            ['nome' => 'Reservado'],
        ];

        foreach ($status as $s) {
            StatusVeiculo::firstOrCreate($s);
        }
    }
}
