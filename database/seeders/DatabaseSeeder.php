<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // DB::table('users')->insert([
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10) . 'gmail.com',
        //         'password' => "123456",
        //     ]
        // ]);

        // DB::table('games')->insert([
        //     [
        //         'description' => Str::random(100),
        //         'url_image' => 'www.' . Str::random(5) . '.com',
        //     ]
        // ]);

        // DB::table('rooms')->insert([
        //     [
        //         'name' => Str::random(10),
        //         'description' => Str::random(100),
        //         'game_id' => rand(1, 6),
        //     ]
        // ]);

        // DB::table('messages')->insert([
        //     [
        //         'content' => fake()->sentence(),
        //         'user_id' => "1",
        //         'room_id' => "1",
        //     ]
        // ]);

        \App\Models\Message::factory(10)->create();
    }
}
