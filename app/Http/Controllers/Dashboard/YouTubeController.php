<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    protected $view = "dashboard.youtube";

    public function index(){
        $youtube = Youtube::orderBy("followers","ASC")->get();

        return $this->view("index", compact(["youtube"]));
    }
}
