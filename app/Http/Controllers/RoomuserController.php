<?php

namespace App\Http\Controllers;

use App\Models\Roomuser;
use Illuminate\Http\Request;

class RoomuserController extends Controller
{
    public function getRoomUserRelations()
    {
        try {
            $relations = Roomuser::all();

            return response()->json([
                "success" => true,
                "message" => "All relations between rooms and users retrieved successfully",
                "data" => $relations
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Relations not retrieved",
                "error" => $th->getMessage()
            ], 500);
        }
    }


    public function postRelation(Request $request)
    {
        try {
            $userId = auth()->user()->id;

            $request->validate([
                'room_id' => 'required'
            ]);

            $relation = new Roomuser();
            $relation->room_id = $request->input('room_id');
            $relation->user_id = $userId;

            $relation->save();

            return response()->json([
                'success' => true,
                'message' => 'Relation stablished successfuly',
                'data' => $relation
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Relation couldn´t be created successfuly',
                'data' => $th->getMessage()
            ], 500);
        }
    }


    public function deleteRelationById($id)
    {
        try {
            $relationDeleted = Roomuser::destroy($id);

            return response()->json([
                'success' => true,
                'message' => 'Relation deleted successfuly'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Relation couldn´t be deleted successfuly',
                'data' => $th->getMessage()
            ], 500);
        }
    }
}
