<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Countrycheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request['country']=='India')
        {
            echo '  Welcome to the Website Your Country is : ',$request['country'];
        }
        else
        {
            
            die('  You may not Browse Our Website outside India'); // Else Do not Display the page and prompt msg
        }

        return $next($request);
    }
}
