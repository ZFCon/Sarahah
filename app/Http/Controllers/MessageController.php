<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;


class MessageController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $context = [
            "user" => $user,
        ];

        return view('user', $context);
    }

    public function create(Request $request)
    {
        Message::create([
            'user_id' => $request['user_id'],
            'message' => $request['message']
        ]);
        return redirect()->back()->with('message', 'Message sent!');
    }
}
