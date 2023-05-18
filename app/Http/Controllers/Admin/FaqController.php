<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $view = "admin.faqs";

    public function index(Request $request){
        $faqs = Faq::get();

        return $this->view("index", compact(["faqs"]));
    }
    public function create(){
        return $this->view("create");
    }

    public function store(Request $request){
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect("/admin/faqs");
    }

    public function edit($id){
        $faq = Faq::find($id);
        return $this->view("edit", compact(["faq"]));
    }

    public function update(Request $request, $id){
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect("/admin/faqs");
    }

    public function delete($id){
        Faq::destroy($id);
        return redirect("/admin/faqs");
    }
}
