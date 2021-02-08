<?php

namespace Database\Seeders;

use App\Models\Assos;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AssosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Assos::create([
            'title' => Str::random(10),
            'description' => Str::random(20),
            'hashtags' => '[]',
            'budget' => "1000",
            'logo' => "https://via.placeholder.com/150",
            'user_id' => "1",
        ])->categories()->attach([
            rand(1, 2),
            rand(1, 2)
        ]);

        Assos::create([
            'title' => Str::random(10),
            'description' => Str::random(20),
            'hashtags' => '["science", "santé"]',
            'budget' => "10000",
            'logo' => "https://via.placeholder.com/250",
            'user_id' => "1",
        ])->categories()->attach([
            rand(1, 2),
            rand(1, 2)
        ]);

    }
}
