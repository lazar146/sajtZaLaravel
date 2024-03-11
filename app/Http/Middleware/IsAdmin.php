<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('user')){
            $isAdmin = session()->get('user')->role_id;
            if ($isAdmin != 1){
                redirect()->route('home')->with('Nisi admin!');
            }
            else{
                return $next($request);
            }
        }

            return redirect()->route('home')->with('Nisi admin!');




    }
}
