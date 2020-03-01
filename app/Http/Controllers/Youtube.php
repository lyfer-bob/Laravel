<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class Youtube extends Controller
{
    //

    public function index($site)
    {
        
        
        //return ["site"=>$site]; **not have file blade
        $site = "youtube from controller";
        return view ("facebook",['data'=>$site]);
    }
}
