<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    protected $view = "admin.commands";

    public function index(){
        return $this->view("index");
    }

    public function migrate(){
        Artisan::call('migrate');
        return redirect()->back();
    }

    public function cacheClear(){
        Artisan::call('cache:clear');
        return redirect()->back();
    }

    public function viewClear(){
        Artisan::call('view:clear');
        return redirect()->back();
    }

    public function configClear(){
        Artisan::call('config:clear');
        return redirect()->back();
    }

    public function allClear(){
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        return redirect()->back();
    }
}
