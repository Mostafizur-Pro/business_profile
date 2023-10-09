<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Session;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('id')) {
            $userId = Session::get('id');
            $user = DB::table('admin_info')->find($userId);
       
            if ($user && $user->role === 'superAdmin' || $user->role === 'admin' ) {
                return $next($request); 
            }
        }

        
        return redirect('/')->with('error', 'You do not have superAdmin privileges.');
    }
}
