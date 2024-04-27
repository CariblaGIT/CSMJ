<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomusers')->insert([
            [
                'user_id' => "1",
                'room_id' => "3",
            ],
            [
                'user_id' => "2",
                'room_id' => "2",
            ],
            [
                'user_id' => "3",
                'room_id' => "2",
            ],
            [
                'user_id' => "9",
                'room_id' => "1",
            ],
            [
                'user_id' => "7",
                'room_id' => "1",
            ],
            [
                'user_id' => "6",
                'room_id' => "2",
            ]
        ]);

        // \App\Models\Roomuser::factory(10)->create();
    }
}
