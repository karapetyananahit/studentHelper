<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessagesController extends Controller
{
    protected $view = "admin.messages";

    public function index(){
        $messages = Message::orderBy("id", "DESC")->paginate(30);
        return $this->view("index", compact(["messages"]));
    }

    public function delete($id){
        Message::destroy($id);
        return redirect("/admin/messages");
    }
}
