<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent; 
use App\Models\Message; 
use App\Http\Requests\StoreMessageRequest; 
use App\Models\Conversation; 

class MessageController extends Controller
{
    public function index(){ 
        return view('chat.index');
    }

    // public function sendMessage(Request $request){ 
    //     $message = new Message(); 
    //     $message->username = $request->username; 
    //     $message->message = $request->message; 
    //     $message->save(); 
    //     broadcast(new MessageSent($message)); 
    //     return response()->json($message); 
    // }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => ['required', 'string'],
        ]);

        $message = new Message();

        $message->user_id = auth()->id();

        $message->message = $request->message;

        $message->save();

        broadcast(new MessageSent($message));

        return response()->json($message);
    }
}
