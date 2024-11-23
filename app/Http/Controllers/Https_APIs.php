<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Https_APIs extends Controller
{
    

        function API()
        {
           // echo "Hello From the API Controller";
            $response= Http::get('https://jsonplaceholder.typicode.com/users/1');
            
           $response= $response->body();

         return view('API.https_APIs',['data'=>json_decode($response)]);
        }
}
