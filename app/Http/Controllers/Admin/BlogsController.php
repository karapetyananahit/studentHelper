<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view("admin.blogs.index", compact(["blogs"]));
    }
    public function create(){
        return view("admin.blogs.create");
    }
    public function store(Request $request){
        $blog = new Blog();
        $blog->is_active = isset($request->is_active) ? 1 : 0;

        $blog->title = $request->title;
        $blog->img = $request->img;
        $blog->author = $request->author;
        $blog->date = $request->date;
        $blog->description = $request->description;

        $blog->save();

        return redirect("/admin/blogs");
    }

    public function edit($id) {
        $blog = Blog::find($id);

        return view("admin.blogs.edit", compact(["blog"]));
    }

    public function update (Request $request, $id) {
        $blog = Blog::find($id);

        $blog->is_active = isset($request->is_active) ? 1 : 0;

        $blog->title = $request->title;
        $blog->img = $request->img;
        $blog->author = $request->author;
        $blog->date = $request->date;
        $blog->description = $request->description;

        $blog->save();

        return redirect("/admin/blogs");
    }

    public function show($id) {

        $blog = Blog::find($id);
        $blog->is_active = true;
        $blog->save();

        return redirect("/admin/blogs");
    }

    public function hide($id) {

        $blog = Blog::find($id);
        $blog->is_active = false;
        $blog->save();

        return redirect("/admin/blogs");
    }
}
