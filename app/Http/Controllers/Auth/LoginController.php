<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    public function login_page()
    {
        return view('auth/login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($request) {
            $result = DB::table('employee_info')
                ->where(function ($query) use ($request) {
                    $query->where('emp_email', $request->input('text'))
                        ->orWhere('emp_number', $request->input('text'));
                })
                ->where('password', $request->input('password'))
                ->first();

            if ($result) {
                Session::put('empId', $result->id);
                Session::put('emp_email', $request->emp_email);
                return Redirect::to('/empDashboard');
            } else {
                $result = DB::table('user_info')
                    ->where(function ($query) use ($request) {
                        $query->where('owner_email', $request->input('text'))
                            ->orWhere('owner_number', $request->input('text'));
                    })
                    ->where('password', $request->input('password'))
                    ->first();

                // dd($result);
                if ($result) {
                    Session::put('userId', $result->id);
                    Session::put('user_email', $request->user_email);
                    return Redirect::to('/userDashboard');
                }
                else {
                    return redirect('login')->with('Fail', 'Login fail! Please log in again.');
                }
            }

        } else {
            return redirect('login')->with('Fail', 'Login fail! Please log in again.');
        }
    }
}
