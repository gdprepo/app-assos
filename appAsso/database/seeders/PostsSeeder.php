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
        Post::create([
            'title' => Str::random(10),
            'description' => Str::random(15),
            'eventdate' => new \DateTime(),
            'type' => "Simple",
            'budget' => "1000",
            'image' => "https://via.placeholder.com/150",
            'assos_id' => "1",
            'visible' => true,
        ]);
    }
}
