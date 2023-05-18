<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    protected $view = "dashboard.websites";

    public function index(){
        $websites = Website::get();

        return $this->view("index", compact(["websites"]));
    }
}
