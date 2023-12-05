<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    public function register_page()
    {
        return view('auth/register');
    }

    
    public function register_user(Request $request)
    {
        $request->validate([
            'owner_name' => 'required|string|max:50',
            'organization_name' => 'required|string|max:50',
            'owner_number' => 'required|string|max:11|unique:user_info',
            'owner_address' => 'required|string',
            'business_type' => 'required|string',
            'owner_email' => 'required|string|email|unique:user_info',
            'password' => 'required|string|min:4',
        ]);

        $userId = Session::get('empId');
        // dd($userId);
        $empData = EmployeeInfo::find($userId);


        $userData = [
            'owner_name' => $request->input('owner_name'),
            'organization_name' => $request->input('organization_name'),
            'owner_number' => $request->input('owner_number'),
            'owner_address' => $request->input('owner_address'),
            'business_type' => $request->input('business_type'),
            'owner_email' => $request->input('owner_email'),
            'password' => $request->input('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Check if $empData is available before adding 'emp_id' and 'emp_name'
        if (isset($empData)) {
            $userData['emp_id'] = $empData->emp_id;
            $userData['emp_name'] = $empData->emp_name;
        }

        $user_id = User::insert($userData);
        if ($empData) {
            return redirect('userInfo_emp')->with('success', 'User Registration successful!');
        }
        // dd($user_id);
        return redirect('login')->with('success', 'Registration successful! Please log in.');
    }

}
