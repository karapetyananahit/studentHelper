<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    protected $view = "dashboard.profile";

    public function index(){
        return $this->view("index");
    }

    public function update(Request $request){


        Auth::user()->update([
            "name" => $request->name,
            "surname" => $request->surname,
        ]);

        return redirect()->back()->with("success","Բարեհաջող փոփոխվեց");
    }

    public function changePassword(Request $request){

        if (Hash::check($request->password, Auth::user()->password)) {
            if($request->newPassword === $request->comfirmPassword){
                // dd($request->all());
                Auth::user()->update([
                    "password" => Hash::make($request->newPassword),
                ]);

                return redirect()->back()->with("success","Գաղտնաբառը փոփոխվեց");
            }
            else{
                return redirect()->back()->with("error","Նույն գաղտնաբառը չէ");
            }
        }
        else{
            return redirect()->back()->with("error","Հին գաղտաբառը սխալ է");
        }
    }

    public function changeImage(Request $request){

//        dd($request->all());

        Auth::user()->update([
            "img" => $request->img,
        ]);

        return redirect()->back()->with("success","Բարեհաջող փոփոխվեց");
    }
}
