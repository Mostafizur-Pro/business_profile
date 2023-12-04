<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\EmployeeInfo;
use App\Models\User;
use Session;
use Closure;
use Illuminate\Http\Request;

class Login
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
            $user = Admin::find($userId);
            if ($user) {
                return redirect('/admin/dashboard');
            }
        }

        if (Session::has('empId')) {
            $userId = Session::get('empId');
            $user = EmployeeInfo::find($userId);
            if ($user) {
                return redirect('/employee/dashboard');
            }
        }

        if (Session::has('userId')) {
            $userId = Session::get('userId');
            $user = User::find($userId);
            if ($user) {
                return redirect('/user/dashboard');
            }
        }


        return redirect('/login')->with('Fail', 'Unauthorized access');
    }
}
