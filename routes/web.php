<?php

use App\Http\Controllers\Bdtst;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsrController;
use App\Http\Controllers\FormCtllr;

use App\Http\Controllers\Route_group;

use App\Http\Controllers\MDW; // Middle Ware Controller called here
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    return view('Pages.Home');
});                                 // Traditional Way of calling the Route Function to retun a View

Route::view('/about/{name}','Pages.About'); // Directly Returning the View with View(); function

Route::get('/My',[UsrController::class,'Myfun']); // Calling the Function Output From the Controller File>>Class>>Function name 'Myfun'

Route::get('/New',[UsrController::class,'New']);  // Calling the another function from the same Controller File

Route::get('/Usr/{name}',[UsrController::class,'usrName']); // Getting Name Value to controller through address bar

Route::get('/view/{nm}',[UsrController::class,'vw']);     // Returning a View From the Controller

Route::get('/UsrLgn/{usr}',[UsrController::class,'UsrLgn']); // Passing value to the View From Crtllr and Applying "if Exist function"


Route::get('/Bdtst',[Bdtst::class,'UsrCtrllr']);

Route::get('/cptst',[UsrController::class,'cptst']);

Route::view('usr','form.usr');                  // Default landing url for the form page/view

Route::post('/addusr',[FormCtllr::class,'usr']); // returning the output page for the form

// New Form page Fresh Begning
Route::view('newform','form.newform');

Route::post('newu',[FormCtllr::class,'newout']);

// ----------  **Named Routes  ------ Route::get('',[::class,''])->name('hm');

Route::get('homepage',[UsrController::class,'home'])->name('hm');  // This will be used in usr view with a href="{{route('hm')}}" value

//Grouping of Routes with prefix   Automatically prefix would be added to the url


Route::view('/Routegp','group.route_group');

// Route::get('Student/rtg',[Route_group::class,'show']);
// Route::get('Student/rta',[Route_group::class,'add']);


Route::prefix('Student')->group(
    function()  //Anononymous Function Without any name 
    {                                                   // Now Remove 'Students from the begning'
        Route::get('/rtg',[Route_group::class,'show']);
        Route::get('/rta',[Route_group::class,'add']);
    }
);              // Full Url for Route becomes 127.0.0.1/Student/rtg  Working Perfectly!



//  ------- Route Grouping with Conrrollers ---------


Route::get('/rts',[Route_group::class,'Show']);
Route::get('/rta',[Route_group::class,'add']);
Route::get('/rtl',[Route_group::class,'list']);

// Here We will Do the same as prefix so,

Route::controller(Route_group::class)->group(
    function()
    {
        Route::get('/rts','Show');      // Just Remove ('/rts',[Route_group::class,'Show']) to the code-> ('/rts','Show')  Working Fine !
        Route::get('/rta','add');
        Route::get('/rtl','list');
        Route::get('rts/{name}','ab');      // Wrking Fine Great!
    
    }
);

// --------     Passing Attribute with the Controller Group

    // Route::get('rts/{name}',[Route_group::class,'ab']);  //Working Fine But This Will be Moved Up at LOC 85 with removed Controller name and class



    //-------  Middleware Pages called with new Controller

    Route::get('MDWV',[MDW::class,'mdh'])->middleware('GroupMDW');  //Using this To assign the Group to the Specific path 
    Route::get('MDWV2',[MDW::class,'mdh2']);

// ----    ||  Group Middleware Calling ||      || Make two or more MDW and apply the following||

 // ---   Taking about named routes here

 Route::middleware('GroupMDW')->group(function() // ||Assigned the Group here||
        {
            Route::get('MDWV2',[MDW::class,'mdh2']);
            Route::get('MDWV',[MDW::class,'mdh2']);
            Route::get('MDWV3',[MDW::class,'mdh']);
            Route::get('MDWV4',[MDW::class,'mdh']);  // All Working Fine !
        }
    );