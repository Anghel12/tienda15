<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\configuracion>
 */
class ConfiguracionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),

            'title1' => $this->faker->text(20),
            'title2' => $this->faker->text(20),
            'title3' => $this->faker->text(20),
            'title4' => $this->faker->text(20),
            'title5' => $this->faker->text(20),

            'descripcion' => $this->faker->text(20),

            'colorPrimario' => $this->faker->text(20),
            'slogan' => $this->faker->text(20),

            'razonsocial' => $this->faker->text(20),
            'direccion' => $this->faker->text(20),
            'celular' => $this->faker->text(20),

            'user_id' => User::all()->random()->id,


        ];
    }
}
