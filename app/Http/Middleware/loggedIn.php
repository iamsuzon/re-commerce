<?php

namespace App\Http\Middleware;

use Closure;

class loggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (array_key_exists("profile_viewer_uid",$_COOKIE))
        {
            return redirect()->route('user-profile');
        }
        else{
            return $next($request);
        }
    }
}
