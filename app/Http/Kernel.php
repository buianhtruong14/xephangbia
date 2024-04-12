<?php

namespace App\Http;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\CheckLogin::class
    ];

    protected $routeMiddleware  = [
        'auth' => \App\Http\Middleware\CheckLogin::class
    ];
}
