<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostYoutube>
 */
class PostYoutubeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->randomDigitNot(100),
            'extract' => $this->faker->text(20),
            'iframe' => $this->faker->text(100),
            'body' => $this->faker->text(500),
            'status' => $this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
