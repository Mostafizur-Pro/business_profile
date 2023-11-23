<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminLoginController extends Controller
{

    public function admin_register()
    {
        return view('auth.admin_register');
    }

    public function register_admin(Request $request)
    {
        $request->validate([
            'admin_name' => 'required|string|max:255',
            'number' => 'nullable|string|min:11|max:11|unique:admin_info',
            'admin_email' => 'required|string|email|unique:admin_info',
            'password' => 'required|string|min:4',
            'role' => 'required|in:admin,superAdmin',
        ]);
        $user_id = DB::table('admin_info')->insert([
            'admin_name' => $request->input('admin_name'),
            'number' => $request->input('number'),
            'admin_email' => $request->input('admin_email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('admin')->with('Success', 'Registration Successful! Please log in.');
    }


    public function admin_login()
    {
        return view('auth.admin_login');
    }


    public function login_admin(Request $request)
    {
        $validatedData = $request->validate([
            'admin_email' => 'required|email',
            'password' => 'required',
        ]);

        $result = DB::table('admin_info')
            ->where('admin_email', $request->input('admin_email'))
            ->where('password', $request->input('password'))
            ->first();

        if ($result) {
            Session::put('id', $result->id);
            Session::put('admin_email', $result->admin_email); // Use $result->admin_email
            return redirect('/adminDashboard')->with('Success', 'Login Success!');
        } else {
            // If login fails, you should return with Fails
            return redirect('/admin')
                ->withInput() // Preserve user input
                ->withFails(['password' => 'Invalid login credentials']); // Add a custom Fail message
        }
    }


 

    public function logout()
    {
        Session::flush();
        return redirect('/admin');
    }
}