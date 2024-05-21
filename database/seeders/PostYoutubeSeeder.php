<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\PostYoutube;
use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostYoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postyoutubes = PostYoutube::factory(1)->create();

        foreach ($postyoutubes as $postyoutube) {

            Image::factory(1)->create([
                'imageable_id' => $postyoutube->id,
                'imageable_type' => PostYoutube::class
            ]);

            Comment::factory(1)->create([
                'commentable_id' => $postyoutube->id,
                'commentable_type' => PostYoutube::class
            ]);

            //falta agregar una tabla polimorfica  para los taggs

          /*   $postyoutube->tags()->attach([
                rand(1, 4),
                rand(5, 8)
            ]); */
        }
    }
}
