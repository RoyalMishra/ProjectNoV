<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bdtst extends Controller
{
    function UsrCtrllr()
    {
        


        $usr=['Ram','Shyam','Hanuman'];  //Created an Array Here and values to be used in the View

        return view('BladeTest.bdTst',['usr'=>$usr]);  //Value Passed here

    }
}
