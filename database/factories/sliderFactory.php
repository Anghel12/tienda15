<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\slider>
 */
class sliderFactory extends Factory
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
            'body' => $this->faker->text(40),
            'user_id' => User::all()->random()->id,
        ];
    }
}
