<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response // Response türünün tam olarak Illuminate\Http\Response olduğundan emin olun
    {
        if (!Session::has("customerID") && !Session::has("adminID")) {
            return redirect('giris');
        } elseif (!Session::has("customerID")) {
            return redirect('giris');
        }

        return $next($request);
    }
}
