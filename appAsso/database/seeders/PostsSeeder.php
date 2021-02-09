<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 3; $i++) { 
            # code...

            Post::create([
                'title' => Str::random(10),
                'description' => Str::random(15),
                'eventdate' => new \DateTime(),
                'type' => "Simple",
                'image' => "https://via.placeholder.com/150",
                'assos_id' => "1",
                'visible' => true,
            ]);
        }

        for ($i=0; $i < 3; $i++) { 
            # code...

            Post::create([
                'title' => Str::random(10),
                'description' => Str::random(15),
                'eventdate' => new \DateTime(),
                'type' => "Simple",
                'image' => "https://via.placeholder.com/150",
                'assos_id' => "2",
                'visible' => true,
            ]);
        }

        for ($i=0; $i < 3; $i++) { 
            # code...

            Post::create([
                'title' => Str::random(10),
                'description' => Str::random(15),
                'eventdate' => new \DateTime(),
                'type' => "Simple",
                'image' => "https://via.placeholder.com/150",
                'assos_id' => "3",
                'visible' => true,
            ]);
        }

    }
}
