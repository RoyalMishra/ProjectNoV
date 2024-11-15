<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCtllr extends Controller
{
    function usr(Request $req)
    {

        
        echo 'Data Type of $req is : ', gettype($req); //getting the data type of variable $req
        echo '<br><br>';
        echo $req;                                     // Output value of full Object with all class and functions
        echo '<br><br> User Name is: ', $req->userName;                // Taking specific Key Output to the Page i.e Name of the user.
        echo '<br><br> User Email is: ', $req->userEmail;
        echo '<br><br> User City is: ', $req->userCity;
        //$usrdata=[$req->userName,$req->userEmail,$req->userCity];
        $usrdata['userName']=$req->userName;
        $usrdata['userEmail']=$req->userEmail;
        $usrdata['userCity']=$req->userCity;
        

        return view('form.output',['usd'=>$usrdata]);                     //Returning the view
        
    }







    // New Form Fresh

    function newout(Request $va)
    {
        echo $va['Gender'];
        echo $va->City,'<br>';
        print_r ($va['skill']); // or we can Also use  print_r ($va->skill);

        
        // $val['Skill']=$va->Skill;
        // return view('form.newoutput',['val'=>$val]);
    }
}
