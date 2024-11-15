<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;  //  Importing if View Exist then return the View Else Display Msg

class UsrController extends Controller
{
    function Myfun()
    {
        echo "Hello";
    }

    function New()
    {
        echo "This is the New Function";
    }

    function usrName($name)
    {
          echo 'Hi Your name is '. $name;
            
    }

    
    function vw($nm) //Getting the value of nm var from the route(address bar)
    {    
    
        
        return view('Pages.ContView',['nm'=>$nm]);  // Passing the same value from the 
        
    }

    function UsrLgn($usr)       // Passing a vale Name from the Url Bar and sending to the View
    {
        if(View::exists('Pages.loginPage'))  // This Will Show Only if the view is Present with Given 'Name'.
        {
        return view('Pages.loginPage',['name'=>$usr]);
        }
        else {
            echo 'View Does Not Exist';   // Else Default Msg Will be Displayed
        }
    }

    function cptst()
    {
        return view('Pages.cptst');
    }



    // Home Page calling

    function home()
    {
        return view('Pages.Home');
    }

}
