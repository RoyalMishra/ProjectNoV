<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elo;

class EloQry extends Controller
{
    // Just to know the Eloquent Query Builder

    function qry()
    {
        // $response=Elo::insert(
        //     [ 'Name'=>'Rama5', 'Email'=>'Rama5@ram.com','Password'=>'Rama5123'
        // ]);
        
        // if($response)
        // {
        //     echo " Name Inserted Successfully";
        // }
        // else
        // {
        //     echo " Name not Inserted";
        // }

        //-------- Delete ------------
        $response=Elo::where('Name','Ram')->update(['Name'=>'Rama']);
            
            if($response)
            {
                echo " Name updated";
            }
            else
            {
                echo " Name not updated";
            }

        return $data=Elo::all();
        // return view('Eloquent.qry');
    }
}