<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

     
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //   return redirect()->action('AdminController@login')->with('flash_message_error', 'Please Login to Access');
        // } else {
        //   return redirect('/admin/dashboard');
        // }
        // return $next($request);

        // switch($guard){
        //     case 'web':
        //         if(Auth::guard($guard)->check()){
        //             return redirect()->route('dashboard');
        //         }
        //         break;

        //     default:
        //         if(Auth::guard($guard)->check()){
        //             return redirect()->route('admin.login');
        //         }
        //         break;

        // }
        if ($guard == "superadmin" && Auth::guard($guard)->check()) {
                return redirect('/superadmin');
            }
            if ($guard == "employer" && Auth::guard($guard)->check()) {
                return redirect('/employer');
            }
            if ($guard == "seeker" && Auth::guard($guard)->check()) {
                return redirect('/seeker');
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
        return $next($request);
    }
}
