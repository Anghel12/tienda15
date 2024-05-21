<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subCategory>
 */
class subCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence();

        return [

            'title' =>  $title,
            'slug' => Str::slug($title),

            'extract' => $this->faker->text(20),

            'body' => $this->faker->text(500),
            'orden' => $this->faker->text(500),
            'status' =>  $this->faker->randomElement([1, 2]),

            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
