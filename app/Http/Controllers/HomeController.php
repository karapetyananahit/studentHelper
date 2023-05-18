<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $view = "pages.home";

    public function index()
    {
        return $this->view('index');
    }
}
