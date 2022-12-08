<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(0, 100),
                'content' => Str::random(100),
            ],
            [
                'title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(0, 100),
                'content' => Str::random(100),
            ],
            [
                'title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(0, 100),
                'content' => Str::random(100),
            ],
        
        ]);
    }
}

