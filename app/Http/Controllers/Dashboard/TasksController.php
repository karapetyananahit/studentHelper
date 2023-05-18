<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    protected $view = "dashboard.tasks";

    public function index(){
        $task = Task::first();
        return $this->view("index", compact(["task"]));
    }


}
