<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\agecheck;
use App\Http\Middleware\Agecheck as MiddlewareAgecheck;
use App\Http\Middleware\Countrycheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // $middleware->append(Agecheck::class); 
        $middleware->appendToGroup('GroupMDW',
            [
                agecheck::class,Countrycheck::class
            ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
