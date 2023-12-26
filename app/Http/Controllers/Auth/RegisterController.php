<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;

class RegisterController extends Controller
{
    public function register_page()
    {
        return view('auth/register');
    }


    public function register_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required|string|max:50',
            'organization_name' => 'required|string|max:50',
            'owner_number' => 'required|string|max:11|unique:user_info',
            'division' => 'required|string',
            'district' => 'required|string',
            'area' => 'required|string',
            'road' => 'required|string',
            'gender' => 'required|string',
            'business_type' => 'required|string',
            'owner_email' => 'required|string|email|unique:user_info',
            'password' => 'required|string|min:4',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Retrieve the EmployeeInfo based on the session ID
        $userId = Session::get('empId');
        $empData = EmployeeInfo::find($userId);

        // Prepare the user data
        $userData = $request->only([
            'owner_name', 'organization_name', 'owner_number', 'division', 'district',
            'area', 'road', 'gender', 'business_type', 'owner_email', 'password'
        ]);

        // Structure the social media data
        $socialMedia = [
            [
                'facebook' => $request->input('facebook'),
                'flink' => $request->input('flink'),
            ],
            [
                'twitter' => $request->input('twitter'),
                'tlink' => $request->input('tlink'),
            ],
            [
                'instagram' => $request->input('instagram'),
                'ilink' => $request->input('ilink'),
            ],
            [
                'linkedin' => $request->input('linkedin'),
                'llink' => $request->input('llink'),
            ],
        ];

        $userData['data'] = json_encode($socialMedia);
        $userData['created_at'] = now();
        $userData['updated_at'] = now();

        // Check if EmployeeInfo exists before adding 'emp_id' and 'emp_name'
        if ($empData) {
            $userData['emp_id'] = $empData->emp_id;
            $userData['emp_name'] = $empData->emp_name;
        }

        // Insert the user data
        
        $user = DB::table('user_info')->insert($userData);

        // Check if the user was successfully created
        if ($user) {
            if ($empData) {
                return redirect('userInfo_emp')->with('success', 'User Registration successful!');
            }
            return redirect('login')->with('success', 'Registration successful! Please log in.');
        }

        // If user creation fails, redirect back with an error
        return redirect()->back()->with('error', 'User registration failed. Please try again.');
    }
}
