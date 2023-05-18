<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\QuestionsMonth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    protected $view = "dashboard.users";

    public function index(){
        $users = User::orderByPoints()->orderBy("questions_times","ASC")->limit(50)->get();

        return $this->view("index", compact(["users"]));
    }

    public function month(){

        $users = QuestionsMonth::whereHas("user",function($q){
            $q->where("is_admin", 0);
        })->orderBy("questions_corrects", "DESC")->orderBy("questions_times","ASC")->limit(20)->get();

        $me = QuestionsMonth::where("user_id", Auth::id())->first();

        return $this->view("month", compact(["users", "me"]));
    }

    public function count(){
        $users = QuestionsMonth::whereHas("user",function($q){
            $q->where("is_admin", 0);
        })->orderBy("questions_times","DESC")->orderBy("questions_corrects", "DESC")->limit(20)->get();

        $me = QuestionsMonth::where("user_id", Auth::id())->first();

        return $this->view("count", compact(["users", "me"]));
    }

    public function percent(){
        $users = QuestionsMonth::whereHas("user",function($q){
            $q->where("is_admin", 0);
        })->orderBy(DB::raw("
                `questions_corrects` / `questions_times` * 100
        "), 'desc')->where("questions_times", ">", 49)->limit(20)->get();

        $me = QuestionsMonth::where("user_id", Auth::id())->first();

        return $this->view("percent", compact(["users", "me"]));
    }

    public function medals(){
        $usersTop = User::orderBy("medal_gold", "DESC")
            ->orderBy("medal_silver", "DESC")
            ->orderBy("medal_bronze", "DESC")
            ->orderBy("medal_top_10", "DESC")
            ->where("medal_gold", ">", 0)
            ->orWhere("medal_silver", ">", 0)
            ->orWhere("medal_bronze", ">", 0)
            ->orWhere("medal_top_10", ">", 0)
            ->get();

        $usersPercentCount = User::orderBy("medal_percent", "DESC")
            ->orderBy("medal_count", "DESC")
            ->where("medal_percent", ">", 0)
            ->orWhere("medal_count", ">", 0)
            ->get();

        $usersTask = User::orderBy("medal_task", "DESC")
            ->where("medal_task", ">", 0)
            ->get();


        return $this->view("menu.medals", compact(["usersTop", "usersPercentCount", "usersTask"]));
    }


}
