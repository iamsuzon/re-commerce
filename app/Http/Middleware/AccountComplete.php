<?php

namespace App\Http\Middleware;

use Closure;
use Kreait\Firebase\Factory;

class AccountComplete
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
        $userId = $_COOKIE['profile_viewer_uid'];

        $firestore = app('firebase.firestore');
        $user = $firestore->database()->collection('Users')->document($userId)->snapshot();

        if ($user['Name'] == null)
        {
            return back()->with('warning_status','Please complete your account first');
        }
        else{
            return $next($request);
        }
    }
}
