<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameId = 1;

        DB::table('rooms')->insert([
            [
                'name' => 'Soy la sala uno de la aplicación',
                'description' => 'Soy la descripción de la sala uno de la aplicación',
                'game_id' => $gameId
            ],
            [
                'name' => 'Soy la sala dos de la aplicación',
                'description' => 'Soy la descripción de la sala dos de la aplicación',
                'game_id' => $gameId
            ],
            [
                'name' => 'Soy la sala 3 de la aplicación',
                'description' => 'Soy la descripción de la sala 3 de la aplicación',
                'game_id' => $gameId
            ],
        ]);

    }
}
