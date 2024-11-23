<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBQUery extends Controller
{
    //Database Query Builder----
    // Simply Import the namespace
    // Use the DB keyword and use the table() function to create query "select * from table name" instead use method here
    function qry()
    {
        // $req=DB::table('users')->where('name','Mishra')->get();
        // $req=DB::table('users')->where('password','12345')->get();
        // ---------    Using Where query now use -----------

      // ************************************************************
      // ---------    Using Insert query  use -----------
    //   $req=DB::table('users')->insert(
    //     [
    //         'name'=>'Mishr',
    //         'email'=>'Rama123@test.com',
    //         'password'=>'Rama134@21'
    //     ]);

    //     if($req)
    //     {
    //         echo "Data Inserted";
    //     }
    //     else
    //     {
    //         echo "Data not Inserted";

    //     }
       
// ***********************************************************************

// ----------- Update Query ------------
            // $req=DB::table('users')->where('name','rama')->update(
            //     [
            //         'name'=> 'shayam',
            //         'email'=>'shyam@abc.com',
            //         'password'=>'shyampass123'

            //     ]);
            //     if ($req)
            //     {
            //         return "Data Updated Successfully";
            //     }
            //     else
            //     {
                    
                    
            //         return "Data Not Updated";
            //     }
// ***********************************************************************

// ----------- Delete Query ------------

    //    $del=DB::table('users')->where('name','Mishra')->delete();
    //     if($del)
    //     {
    //         echo "Data Deleted";
            
    //     }
    //     else
    //     {
    //         echo "Data Not Deleted";
            
    //     }


    

        // 
    $req=DB::table('users')->get();
    return view('DBQRY.dBQueryBuilder',['data'=>$req]);

    }
}
