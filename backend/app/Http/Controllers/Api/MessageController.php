<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message; 
use App\Events\MessageSent; 

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')
            ->latest()
            ->get();

        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $message = Message::create([
            'user_id' => $request->user()->id,
            'message' => $validated['message'],
        ]);

        $message->load('user');

        broadcast(new MessageSent($message));

        return response()->json([
            'message' => $message,
        ], 201);
    }
}
