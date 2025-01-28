<?php

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaga>
 */
// class VagaFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * r@eturn array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             //
//         ];
//     }
// }

namespace Database\Factories;

use App\Models\Vaga;
use Illuminate\Database\Eloquent\Factories\Factory;

class VagaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->jobTitle,
            'cargo' => $this->faker->jobTitle,
            'salario' => $this->faker->randomFloat(2, 1000, 10000),
            'salario_visivel' => $this->faker->boolean,
            'descricao' => $this->faker->paragraph,
        ];
    }
}
