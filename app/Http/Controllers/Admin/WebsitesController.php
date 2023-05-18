<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    protected $view = "admin.websites";

    public function index(){
        $websites=Website::get();
        return $this->view("index",compact(['websites']));
    }
    public function create(){
        return $this->view("create");
    }
    public function store(Request $request){
        $website=new Website();

        $website->name = $request->name;
        $website->url = $request->url;
        $website->languages = $request->languages;

        $website->save();

        return redirect("/admin/websites");
    }
    public function edit($id){
        $website=Website::find($id);
        return $this->view("edit",compact(['website']));
    }
    public function update(Request $request,$id){
        $website=Website::find($id);

        $website->name = $request->name;
        $website->url = $request->url;
        $website->languages = $request->languages;

        $website->save();
        return redirect("/admin/websites");
    }
}
