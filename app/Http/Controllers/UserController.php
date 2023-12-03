<?php

namespace App\Http\Controllers;

use App\Models\EmployeeInfo;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{


    public function user_login()
    {
        return view('auth.user_login');
    }


    public function login_user(Request $request)
    {


        $request->validate([
            'owner_email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $result = DB::table('user_info')
            ->where('owner_email', $request->input('owner_email'))
            ->where('password', $request->input('password'))
            ->first();

        // dd($result);
        if ($result) {
            Session::put('userId', $result->id);
            Session::put('user_email', $request->user_email);
            return Redirect::to('/user/dashboard');
            // echo 'success';
        } else {
            return redirect('userLogin')->with('Fail', 'Login fail! Please log in again.');
        }
    }




   
}
