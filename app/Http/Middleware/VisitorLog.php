<?php

namespace App\Http\Middleware;

use App\Http\Controllers\VisitorLogController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visitController =  new VisitorLogController();
        $visitController->storeVisitors();
        return $next($request);
    }
}
