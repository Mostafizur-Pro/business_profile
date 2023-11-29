<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;

use Session;



class SuperAdminMiddleware
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

            if ($user && $user->role === 'superAdmin') {
                return $next($request);
            }
            return redirect('/admin/dashboard')->with('error', 'You do not have superAdmin privileges.');
        }

        return redirect('/admin')->with('error', 'You are not authorized to access the admin Register Page.');
    }
}
