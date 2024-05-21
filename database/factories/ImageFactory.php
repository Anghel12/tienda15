<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            // https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+veniam

            
            'url' => $this->faker->imageUrl(width: 620, height: 480)

           // 'url' => $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg')
            
           // 'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false) //public
        ];
    }
}
