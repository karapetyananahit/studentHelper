<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $view = "pages.about";

    public function index()
    {
        return $this->view('index');
    }
}
