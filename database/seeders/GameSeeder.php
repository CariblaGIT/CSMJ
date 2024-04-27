<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'Valorant',
                'description' => 'Riot Games shooter competitivo 5v5',
                "image"  => 'public/games/valorant.png'
            ],
            [
                'name' => 'Metal Gear Solid',
                'description' => 'Conviertete en el soldado con las mejores habilidades en combate y sigilo',
                "image"  => 'public/games/metal_gear_solid.png'
            ],
            [
                'name' => 'Pokemon Escarlata',
                'description' => 'Hazte con todos los pokemon en la region de Paldea',
                "image"  => 'public/games/pokemon.png'
            ],
            [
                'name' => 'Diablo III',
                'description' => 'Define el destino de la lucha entre angeles y demonios',
                "image"  => 'public/games/diablo_3.png'
            ]
        ]);

        \App\Models\Game::factory(10)->create();
    }
}
