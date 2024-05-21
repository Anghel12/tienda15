<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\video>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->text(20),
            'description' =>  $this->faker->text(20),
            'url' =>  $this->faker->text(20),
            'user_id' =>  User::all()->random()->id,

        ];
    }
}
