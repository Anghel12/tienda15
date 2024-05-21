<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
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
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph(),
            'product_id' => $this->faker->numberBetween(1, 10),//no se ejecutar el post ultimo xd
        ];
    }
}
