<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $view;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view(string $path,$data=[],$mergeData=[])
    {
        return view($this->view.'.'.$path,$data,$mergeData);
    }
}
