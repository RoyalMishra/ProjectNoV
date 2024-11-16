<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


// -----   Middleware  Conditional Statement or filter which works between ||UsrRequest||--->||MiddleWare||--->||Contrller||

// -----   We can Apply Middleware using Command Line " php artisan make:middleware middleware_name

// -----   Middleware is of three types :: #1 Global Middleware #2 Group Route MiddleWare #3 Route/Single Middleware

// -----   Conditions are Written to Execute in [BootStrap Foler of Root ] --> || app.php || file  inside all above Three MW are present in the file

// -----   Like We Use Controller path in web.php in routes || we also have to use same namespace in the [Bootstrap]->app.php file
//         So copy and use App\Http\Middleware\agecheck; and paste in the above folder's file.
// -----     Now use $middleware in global section and use append menthod with our mdw name
// -----   eg $middleware->appnend('agecheck');   || Now apply the cond. in this Current page Done!


// ---  || Now to Group Middle ware Just simply copy namespace from both the MDW and Paste to Bootstrap-->app.php

// ---      And apply the function to $middleware->appendToGroup('GroupMDW',[agecheck::class,Countrycheck::class]);    -->Working!

class Agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //  ---------    Condition applied and responded globally Working sucessfully !
        if($request['age']>='18')
        {
            echo 'Welcome to the Website Your age is : ',$request['age'];
        }
        else
        {
            
            die(' You may not Browse Our Website'); // Else Do not Display the page and prompt msg
        }
        

        return $next($request);
        
    }
}
