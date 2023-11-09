<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has("customerID") && ($request->is('giris') || $request->is('kayit'))) {
            return redirect('/musteri');
        } elseif (Session::has("adminID") && ($request->is('giris') || $request->is('kayit'))) {
            return redirect('/admin');
        }
        return $next($request);
    }
}
