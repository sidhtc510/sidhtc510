<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check() && Auth::user()->is_admin == 1){
            return $next($request);
        }
        // abort(404);
         return redirect(route('home'))->with('flash_message', 'try to logged in as admin');

    }
}
