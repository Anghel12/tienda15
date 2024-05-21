<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\referral>
 */
class referralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'referred_user_id' => User::all()->random()->id,
            'parent_id' => User::all()->random()->id,
            'referral_code' => $this->faker->word,
            'is_used' => $this->faker->boolean,
            'points' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
