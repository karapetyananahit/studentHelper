<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
	protected $view = "admin.books";

	public function index(){
		$books=Book::get();
		return $this->view("index",compact(['books']));
	}

    public function edit($id) {
        $books = Book::find($id);

        return view("admin.books.edit", compact(["books"]));
    }

    public function update (Request $request, $id) {
        $books = Book::find($id);

        $books->name = $request->name;
        $books->author = $request->author;
        $books->pages = $request->pages;
        $books->img = $request->img;
        $books->to_show = $request->to_show;
        $books->download = $request->download;


        $books->save();
        return redirect("/admin/books");
    }

}
