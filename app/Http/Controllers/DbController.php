<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DbController extends Controller
{
    
    function users()
    {
        $DS=DB::select('select * from users' );
        //return DB::select('select * from users' );
        return view('DB.database',['ds'=>$DS]);
    }
}
