<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loja>
 */
class LojaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_fantasia' => $this->faker->company(),
            'razao_social' => $this->faker->companySuffix(),
            'nome_gerente' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'endereco' => $this->faker->address(),
            'is_aberta' => $this->faker->boolean(),
        ];
    }
}
