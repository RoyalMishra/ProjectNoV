<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Route_group extends Controller
{
    function show()
    {
        return " This is Show Function from Route Group";
    }

    function add(){
        return " Hi This is the Add fucntion from the Route Group";
    }

    function list()
    {
        return " Hi This is the List Function";
    }

    function ab($name)
    {
        return $name;
    }
}
