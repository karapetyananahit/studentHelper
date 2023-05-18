<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    protected $view = "dashboard.news";

    public function index(){
        $news = News::orderBy("id", "DESC")->get();
        return $this->view("index", compact(["news"]));

    }
}
