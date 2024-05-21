<?php

namespace Database\Factories;

use App\Models\Coin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCoin>
 */
class UserCoinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'balance' => $this->faker->randomNumber(2) * 10,

            'user_id' => User::all()->random()->id,

            'coin_id' => Coin::all()->random()->id,

        ];
    }
}
