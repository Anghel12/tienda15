<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class videoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = Video::factory(400)->create();

        foreach ($videos  as $video) {

            Comment::factory(1)->create([
                'commentable_id' => $video->id,
                'commentable_type' => Video::class
            ]);

        }

    }
}