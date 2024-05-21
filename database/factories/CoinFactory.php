<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coin>
 */
class CoinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(28);
        return [

                'name' => $name,
                'symbol' => $this->faker->name('CT_COIN'),
                'exchange_rate' => $this->faker->randomDigitNot(400),
                ];
            
    }
}
