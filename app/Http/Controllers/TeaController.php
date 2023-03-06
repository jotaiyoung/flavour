<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class TeaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function page (Request $req, $teaType) {
        
        return view("page.$teaType");
    }
}
