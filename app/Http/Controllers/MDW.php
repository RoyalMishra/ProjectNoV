<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MDW extends Controller
{
    function mdh()
    {
        return view('Middleware.mwHome');

    }
    function mdh2()
    {
        return view('Middleware.mwHome2');
        
    }
}
