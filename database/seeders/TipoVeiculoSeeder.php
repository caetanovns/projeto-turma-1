<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nome' => 'Carro'],
            ['nome' => 'Moto'],
            ['nome' => 'Caminhão'],
            ['nome' => 'Van'],
            ['nome' => 'Ônibus'],
        ];

        foreach ($tipos as $t) {
            \App\Models\TipoVeiculo::updateOrCreate($t);
        }
    }
}
