<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Book;
use App\Models\News;
use App\Models\Question;
use App\Models\Website;
use App\Models\Youtube;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    protected $view = "dashboard.dashboard";

    public function index(){
        $usersCount = User::count();
        $users = User::orderByPoints()->orderBy("questions_times","ASC")->limit(20)->get();

        $questions = User::sum("questions_times");
        $questionsToday = User::sum("questions_times_today");
        $questionsCorrects = User::sum("questions_corrects");

        $tasks = User::sum("tasks_times");
        $tasksCorrects = User::sum("tasks_corrects");

        $questionCount = Question::count();

        $youtubeCount = Youtube::count();
        $booksCount = Book::count();
        $websitesCount = Website::count();

        $medals = User::all()->sum(function($user){
            return $user->medal_gold + $user->medal_silver + $user->medal_bronze + $user->medal_top_10 + $user->medal_task + $user->medal_count + $user->medal_percent;
        });

        $news = News::orderBy("id", "DESC")->limit(3)->get();

        return $this->view("index",compact([
            "usersCount",
            "users",

            "questions",
            "questionsToday",
            "questionsCorrects",

            "questionCount",

            "tasks",
            "tasksCorrects",

            "youtubeCount",
            "booksCount",
            "websitesCount",

            "medals",

            "news"

        ]));

    }
}
