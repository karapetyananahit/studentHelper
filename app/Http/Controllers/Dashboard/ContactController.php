<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    protected $view = "dashboard.contact";

    public function index(){

        return $this->view("index");

    }

    public function store(Request $request){

        $message = new Message();
        $message->user_id = Auth::id();
        $message->name = Auth::user()->name;
        $message->surname = Auth::user()->surname;
        $message->email = Auth::user()->email;
        $message->subject = $request->subject;

        $message->save();
        return redirect("/dashboard")->with(["success" => "Ձեր նամակը ուղարկված է։"]);

    }
}
