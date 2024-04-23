<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getAllGames (){
        try {
            $games = Game::all();

            return response()->json([
                "success" => true,
                "message" => "Games retrieved successfully",
                "data" => $games
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Games not retrieved",
                "error" => $th->getMessage()
            ], 500);
        }
    }

    public function postGame (Request $req){
        try {
            $game = new Game;

            $game->name = $req->input('name');
            $game->description = $req->input('description');
            $game->image = $req->input('image');

            $game->save();

            return response()->json([
                "success" => true,
                "message" => "Game posted successfully",
                "data" => $game
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Game not posted",
                "error" => $th->getMessage()
            ], 500);
        }
    }

    public function putGame (Request $req, $id){
        try {
            $game = Game::find($id);

            $updateData = $req->only(['name', 'description', 'image']);
            // $new_name = $req->input('name');
            // $new_description = $req->input('description');
            // $new_image = $req->input('image');

            $game->update($updateData);

            return response()->json([
                "success" => true,
                "message" => "Game updated successfully",
                "data" => $game
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Game not updated",
                "error" => $th->getMessage()
            ], 500);
        }
    }

}

