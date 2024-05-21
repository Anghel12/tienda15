<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(400)->create();

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);

            Comment::factory(1)->create([
                'commentable_id' => $post->id,
                'commentable_type' => Post::class
            ]);

            $post->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);

           /*  Price::factory(1)->create([
                'priceable_id' => $post->id,
                'priceable_type' => Post::class
            ]); */
            
        }
    }
}
