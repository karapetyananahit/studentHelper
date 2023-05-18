<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    protected $view = "admin.questions";

    public function index(Request $request){
        if(isset($request->search)){
            $isPaginate = false;
            $search = $request->search;
            $questions = Question::where("question","like","%$search%")->get();
        }else{
            $isPaginate = true;
            $questions = Question::paginate(10);
        }

        return $this->view("index", compact(["questions","isPaginate"]));
    }

    public function create(){
        return $this->view("create");
    }

    public function store(Request $request){
        $question = new Question();
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->seconds = $request->seconds;
        $question->form = $request->form;

        $question->save();

        return redirect("/admin/questions");
    }

    public function edit($id){
        $question = Question::find($id);
        return $this->view("edit", compact(["question"]));
    }

    public function update(Request $request, $id){
        $question = Question::find($id);
        $question->question = $request->question;
        $question->answer = $request->answer;
        $question->seconds = $request->seconds;
        $question->form = $request->form;

        $question->save();

        return redirect("/admin/questions");
    }

    public function delete($id){
        $question = Question::destroy($id);
        return redirect("/admin/questions");
    }
}
