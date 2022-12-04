<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use Auth;

class HomeController extends Controller
{ 
   
    public function index(Request $request)
    {

        $query = $request->get('texto');
        $user = User::where('name', 'LIKE', '%'.$query.'%')->get();

        return view("home.index")->with('query', $query)->with('user', $user);

    }

    public function dashboard(Request $request)
    {
        return view("dashboard");
    }

    public function chat($id)
    {
        

        $user_contact = User::where('id', $id)->get();
        $addressee_user_id = $user_contact[0]->id;
        $user_id = Auth::user()->id;

        $messages = Messages::where('user_id', $user_id)->where('addressee_user_id', $addressee_user_id)->get();

        return view("home.chat", compact('user_contact'))->with('messages', $messages);
    }

    public function createMensaje($id)
    {
        Messages::create([
            "message" => "message",
            "user_id" => "2",
        ]);

        return $this->chat($id);
    }
}
