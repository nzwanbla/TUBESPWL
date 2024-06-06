<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class ChatController extends Controller
{
    public function fetch(Request $request)
    {
        $messages = Chat::where('sender_id', Auth::id())->get();
        return response()->json($messages);
    }
    
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function fetchadmin(Request $request)
    {
        $userId = $request->input('user_id');
        $messages = Chat::with('sender')->where('sender_id', $userId)->get();
        return response()->json($messages);
    }

    public function user()
    {
        $users = User::whereNotIn('id', [1])->get();
        return response()->json($users); 
    }
    
    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string'
        ]);

        Chat::create([
            'sender_id' => auth()->user()->id,
            'message' => $validatedData['message'],
            'is_admin' => 0 
        ]);

        return response()->json(['success' => true]);
    }

    public function sendMessageadmin(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string'
        ]);

        Chat::create([
            'sender_id' => $request->input('user_id'),
            'message' => $validatedData['message'],
            'is_admin' => 1
        ]);

        return response()->json(['success' => true]);
    }



}
