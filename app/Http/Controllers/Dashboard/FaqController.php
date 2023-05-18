<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $view = "dashboard.faq";

    public function index(){

        $faqs = Faq::get();

        return $this->view("index", compact(["faqs"]));

    }
}
