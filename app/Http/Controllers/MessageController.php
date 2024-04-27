<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            $message = Message::where([['id', $id],['user_id', $userId]])->first();

            $request->validate([
                'content' => 'required'
            ]);

            $message->content = $request->input('content');

            $message->save();

            return response()->json([
                'success' => true,
                'message' => 'Message updated successfuly',
                'data' => $message
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Message couldn´t be updated successfuly',
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
                'message' => 'Message deleted successfuly'
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
