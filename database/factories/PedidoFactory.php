<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'subtotal' => $this->faker->randomNumber(5),
            'impuesto' =>  $this->faker->randomNumber(5),
            'total' => $this->faker->randomNumber(5),
            'entregado' => $this->faker->text(20),
            'user_id' => User::all()->random()->id,
        ];
    }
}
