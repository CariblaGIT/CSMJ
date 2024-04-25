<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'content' => fake()->sentence(),
                'user_id' => "2",
                'room_id' => "1",
            ],
            [
                'content' => fake()->sentence(),
                'user_id' => "3",
                'room_id' => "2",
            ],
            [
                'content' => fake()->sentence(),
                'user_id' => "1",
                'room_id' => "3",
            ]
        ]);

        \App\Models\Message::factory(10)->create();
    }
}
