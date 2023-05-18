<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    protected $view = "admin.tasks";

    public function index(){
        $task = Task::first();
        return $this->view("index", compact(["task"]));
    }

    public function update(Request $request){

        $task = Task::first();
        $task->subject = $request->subject;
        $task->save();
        return redirect("/admin/tasks");
    }
}
