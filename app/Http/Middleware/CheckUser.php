<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
//            echo "Key exists!";
            $cvalue = $_COOKIE['profile_viewer_uid'];
            setcookie('profile_viewer_uid', $cvalue, time() + (86400 * 30), "/");
            return $next($request);
        }
        else
        {
//            echo "Key does not exist!";
            return redirect('user-register');
        }
    }
}
