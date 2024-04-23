<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getAllMessages()
    {
        try {
            $messages = Message::all();

            return response()->json([
                "success" => true,
                "message" => "Messages retrieved successfully",
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
            $request->validate([
                'content' => 'required',
                'user_id' => 'required',
                'room_id' => 'required'
            ]);

            $message = new Message;
            $message->content = $request->input('content');
            $message->user_id = $request->input('user_id');
            $message->room_id = $request->input('room_id');

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


    // updateMessageById - TO BE DONE?

    public function deleteMessageById($id)
    {
        try {
            $messageDeleted = Message::destroy($id);
            // $messageDeleted = Message::find($id);
            // $messageDeleted->delete();

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
