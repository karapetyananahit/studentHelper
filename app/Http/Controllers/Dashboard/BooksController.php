<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    protected $view = "dashboard.books";

    public function index(){
        $books = Book::get();
        return $this->view("index", compact(["books"]));

    }

    public function increment($id){
        $book = Book::find($id);
        $book->increment("download");
        $book->save;
        echo $book->download;
    }
}
