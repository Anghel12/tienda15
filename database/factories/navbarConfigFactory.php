<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\navbarConfig>
 */
class navbarConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(10),
            'boton1' => $this->faker->text(10),
            'boton2' => $this->faker->text(10),

            'boton3' => $this->faker->text(10),
            'boton4' => $this->faker->text(10),
            'boton5' => $this->faker->text(10),
            'principalboton1' => $this->faker->text(10),

            'subboton1' => $this->faker->text(10),
            'subboton2' => $this->faker->text(10),
            'subboton3' => $this->faker->text(10),
            'buscarboton1' => $this->faker->text(10),
            'buscarboton2' => $this->faker->text(10),

            'user_id' => User::all()->random()->id,
        ];
    }
}
