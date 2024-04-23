<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getAllRooms()
    {
        try{
            $rooms = Room::all();
            
            return response()->json(
                [
                    "success" => true,
                    "message" => "Rooms retrieved successfully",
                    "data" => $rooms
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Rooms cant retrieved successfully",
                    "data" => $th->getMessage()
                ],
                500
            );
        }
    }
}
