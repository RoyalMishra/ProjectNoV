<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Model_Students extends Controller
{
    function stu() 
    {
        //fun() was Created in Model->Student
        // take a variable and define the 'new' to create object with the given path
        // Now Object will be created to Print the function We need to call it by Varname->functionName();
        //Function Imported and called Successfully

        $ModelFunction= new \App\Models\Student;
        echo $ModelFunction->fun();
        //Now Path should Be given of model with ::all(); function to fetch the data
        $data=\App\Models\Student::all();
        return view('Models.students',['a'=>$data]);
    }
}
