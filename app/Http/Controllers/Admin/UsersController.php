<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    protected $view = "admin.users";

    public function index(Request $request){
        if(isset($request->search)){
            $isPaginate = false;
            $search = $request->search;
            $users = User::where("name","like","%$search%")->orWhere("email","like","%$search%")->get();
        }else{
            $isPaginate = true;
            $users = User::paginate(50);
        }

        return $this->view("index", compact(["users", "isPaginate"]));
    }




    public function create(){
        return $this->view("create");
    }

    public function store(Request $request){

        $user = new User();

        $user->is_admin = isset($request->is_admin) ? 1 : 0;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect("/admin/users");
    }

    public function edit($id){
        $user = User::find($id);
        return $this->view("edit",compact(["user"]));

    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->tasks_times = $request->tasks_times;
        $user->tasks_corrects = $request->tasks_corrects;

        $user->medal_gold = $request->medal_gold;
        $user->medal_silver = $request->medal_silver;
        $user->medal_bronze = $request->medal_bronze;
        $user->medal_top_10 = $request->medal_top_10;
        $user->medal_task = $request->medal_task;
        $user->medal_count = $request->medal_count;
        $user->medal_percent = $request->medal_percent;

        $user->is_admin = isset($request->is_admin) ? 1 : 0;

        if($request->password != null){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect("/admin/users")->with("success","Changes has been updated");

    }

    public function questionReset(){
        User::where("questions_times_today", ">", 0)->update([
            "questions_times_today" => 0
        ]);

        return redirect("/admin/users")->with("success","Questions count has been reset");
    }

    public function delete($id){
        User::destroy($id);

        return redirect("/admin/users");
    }
}
