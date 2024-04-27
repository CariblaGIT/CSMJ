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

    public function postRoom(Request $request)
    {
        try{
            $room = new Room;
            $room->name = $request->input('name');
            $room->description = $request->input('description');
            $room->game_id =$request->input('game_id');
    
            $room->save();

            return response()->json(
                [
                    "success" => true,
                    "message" => "Room created successfully",
                    "data" => $room
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Room cant be created",
                    "error" => $th->getMessage()
                ],
                500
            );
        }
    }

    public function putRoom(Request $request, $id)
    {
        try {
            $roomId = $id;

            $roomName = $request->input('name');
            $roomDescription = $request->input('description');
    
            $room = Room::find($roomId);
    
            if($roomName) {
                $room->name = $roomName;
            }
            
            if( $roomDescription) {
                $room->description = $roomDescription;
            }    
    
            $room->save();
    
            return response()->json(
                [
                    "success" => true,
                    "message" => "room modified successfully",
                    "data" => $room
                ],
                200
            );
        } catch(\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Room cant be updated",
                    "error" => $th->getMessage()
                ],
                500
            );
        }
    }

    public function deleteRoom($id)
    {
        try {
            $roomDeleted = Room::destroy($id);

            return response()->json(
                [
                    "success" => true,
                    "message" => "Room deleted successfully"
                ],
                200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Room cant be deleted",
                    "error" => $th->getMessage()
                ],
                500
            );
        }
    }
}
