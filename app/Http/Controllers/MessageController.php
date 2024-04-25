<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getAllMyMessages()
    {
        try {
            // Fetch messages posted by the current user
            $userId = auth()->user()->id;
            $messages = Message::where('user_id', $userId)->get();

            return response()->json([
                "success" => true,
                "message" => "All your messages retrieved successfully",
                "data" => $messages
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Messages not retrieved",
                "error" => $th->getMessage()
            ], 500);
        }
    }


    public function getAllRoomMessages($room_id)
    {
        try {
            // Fetch messages posted in this current room
            $messages = Message::where('room_id', $room_id)->get();

            return response()->json([
                "success" => true,
                "message" => "All messages from the room retrieved successfully",
                "data" => $messages
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Messages not retrieved",
                "error" => $th->getMessage()
            ], 500);
        }
    }


    public function postMessage(Request $request)
    {
        try {
            $userId = auth()->user()->id;

            $request->validate([
                'content' => 'required',
                'user_id' => 'required',
                'room_id' => 'required'
            ]);

            $message = new Message;
            $message->content = $request->input('content');
            $message->room_id = $request->input('room_id');
            $message->user_id = $userId;

            $message->save();

            return response()->json([
                'success' => true,
                'message' => 'Message created successfuly',
                'data' => $message
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Message couldn´t be created successfuly',
                'data' => $th->getMessage()
            ], 500);
        }
    }


    public function updateMessageById(Request $request, $id)
    {
        try {
            $userId = auth()->user()->id;
            $message = Message::find($id)->get();

            $request->validate([
                'content' => 'required',
                'room_id' => 'required',
                'user_id' => 'required'
            ]);

            $message->content = $request->input('content');
            $message->room_id = $request->input('room_id');
            $message->user_id = $userId;

            $message->save();

            return response()->json([
                'success' => true,
                'message' => 'Message created successfuly',
                'data' => $message
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Message couldn´t be created successfuly',
                'data' => $th->getMessage()
            ], 500);
        }
    }

    public function deleteMessageById($id)
    {
        try {
            $messageDeleted = Message::destroy($id);

            return response()->json([
                'success' => true,
                'message' => 'Message deleted successfuly',
                'data' => $messageDeleted
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Message couldn´t be deleted successfuly',
                'data' => $th->getMessage()
            ], 500);
        }
    }
}
