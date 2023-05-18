<?php

namespace App\Http\Controllers;

use App\Facades\Auth;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    protected $view = "pages.blogs";

    public function index()
    {
        $blogs = Blog::where("is_active", 1)->get();
        return $this->view('index', compact("blogs"));
    }

    public function hidden()
    {
        $blogs = Blog::where("is_active", 0)->get();
        return $this->view('index', compact("blogs"));
    }

    public function show($id)
    {
        $blog = Blog::where("is_active", 1)->find($id);
        if(!$blog){

            if(Auth::isAdmin()){
                $blog = Blog::find($id);
                return $this->view('show', compact("blog"));
            }

            return redirect("/blogs");
        }

        $blog->increment("views");
        $blog->save();
        return $this->view('show', compact("blog"));
    }
}
