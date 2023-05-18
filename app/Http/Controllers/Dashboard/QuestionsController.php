<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionsMonth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    protected $view = "dashboard.questions";

    public function index(){
        return $this->view("index");
    }

    public function start(){
        if(Auth::user()->questions_times_today < 10){
            $question = Question::inRandomOrder()->first();

            $user = Auth::user();
            $user->increment("questions_times");
            $user->increment("questions_times_today");
            $user->save();

            $userInMonth = QuestionsMonth::where("user_id", $user->id)->first();
            if($userInMonth == null){
                $userInMonth = new QuestionsMonth();
                $userInMonth->user_id = $user->id;
                $userInMonth->questions_times = 1;
            }else{
                $userInMonth->increment("questions_times");
            }
            $userInMonth->save();

            return $this->view("start", compact(["question"]));
        }else{
            return redirect("/dashboard/questions");
        }
    }

    public function check(Request $request){
//        dd($request->all());
        $id = $request->id;
        $answer = $request->answer;
        $question = Question::find($id);

        if($question != null){
            $isSuccess = "false";
            $user = Auth::user();

            if(strtolower($question->answer) == strtolower($answer)){
                $userInMonth = QuestionsMonth::where("user_id", $user->id)->first();
                $userInMonth->increment("questions_corrects");
                $user->increment("questions_corrects");
                $isSuccess = "true";
            }
            $user->save();

            echo $isSuccess;
        }else{
            echo "error";
        }
    }
}

