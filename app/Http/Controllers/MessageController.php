<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MessageController extends Controller
{
    public function index()
    {

        Messages::create([
            "message" => "message",
            "user_id" => "2",
        ]);

        return view("home.chat");
    }
}
