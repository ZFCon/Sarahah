<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        $messages = $user->messages->sortByDesc('created_at');
        $context = [
            "user" => $user,
            "messages" => $messages,
        ];

        return view('home', $context);
    }
}
