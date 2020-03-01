<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yahoo extends Controller
{
    //
    public function index(Request $request)
    {
        print_r($request->input());
        echo "<br>";
        echo $request->input('name');
        echo "<br>";
        print_r($request->path());
        echo "<br>";
        print_r($request->url());
        echo "<br>";
        print_r($request->method());
        echo "<br>";
        if ($request->isMethod('GET'))
        {
            echo "get request";
        }
    }
}
