<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Helpers\RedirectHelper;
use App\Models\UserInfo;

use function App\Helpers\redirectAfterLogin;

class LoginController extends Controller
{
    public function login_page(Request $request)
    {
        $url = $request->session()->previousUrl(); // Get the previous URL
        $request->session()->put('previous_url', $url); // Store it in a session variable

        // dd($url);

        return view('auth/login');
    }



    public function login(Request $request)
    {

        $previousUrl = $request->session()->get('previous_url');
        // dd($previousUrl, "http://localhost:8000/room");
        $request->validate([
            'text' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request) {
            $result = EmployeeInfo::where(function ($query) use ($request) {
                $query->where('emp_email', $request->input('text'))
                    ->orWhere('emp_number', $request->input('text'));
            })
                ->where('password', $request->input('password'))
                ->first();

            if ($result) {
                Session::put('empId', $result->id);
                Session::put('emp_email', $request->emp_email);
                return Redirect::to('/employee/dashboard');
            } else {
                $result = UserInfo::where(function ($query) use ($request) {
                    $query->where('owner_email', $request->input('text'))
                        ->orWhere('owner_number', $request->input('text'));
                })
                    ->where('password', $request->input('password'))
                    ->first();

                // dd($result);
                if ($result) {
                    Session::put('userId', $result->id);
                    Session::put('user_email', $request->user_email);

                    if ($previousUrl === "http://localhost:8000/room") {
                        return Redirect::to('/room');
                    } else {
                        return Redirect::to('/user/dashboard');
                    };
                } else {
                    return redirect('login')->with('Fail', 'Login fail! Please log in again.');
                }
            }
        } else {
            return redirect('login')->with('Fail', 'Login fail! Please log in again.');
        }
    }
}
