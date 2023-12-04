<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\EmployeeInfo;
use App\Models\User;
use Session;

class LoginRoom
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
        {
            if (Session::has('id')) {
                $userId = Session::get('id');
                $user = Admin::find($userId);
                if ($user) {
                    return $next($request);
                }
            }
    
            if (Session::has('empId')) {
                $userId = Session::get('empId');
                $user = EmployeeInfo::find($userId);
                if ($user) {
                    return $next($request);
                }
            }
    
            if (Session::has('userId')) {
                $userId = Session::get('userId');
                $user = User::find($userId);
                if ($user) {
                    return $next($request);
                }
            }
    
    
            return redirect('/login')->with('Fail', 'Unauthorized access');
        }
    }
}
