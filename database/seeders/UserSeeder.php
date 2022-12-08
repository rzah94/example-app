<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(5) . '@mail.ru',
                'age' => random_int(18, 60),
                'salary' => random_int(10000, 100000),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(5) . '@mail.ru',
                'age' => random_int(18, 60),
                'salary' => random_int(10000, 100000),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(5) . '@mail.ru',
                'age' => random_int(18, 60),
                'salary' => random_int(10000, 100000),
            ]
        ]);
    }
}

