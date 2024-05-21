<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle>
 */
class DetalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         return [
            'cantidad' =>  $this->faker->randomNumber(5),
            'preciototal' =>  $this->faker->randomNumber(5),
            'user_id' => User::all()->random()->id,
            'producto_id' => Post::all()->random()->id,
        ];
    }
}
