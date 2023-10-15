<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // public function payment_method()
    // {
    //     return view('UserPanel.paymentInterface');
    // }


    public function user_register()
    {
        return view('auth.user_register');
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
        $empData = DB::table('employee_info')->find($userId);


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

        $user_id = DB::table('user_info')->insert($userData);
        if ($empData) {
            return redirect('userInfo_emp')->with('success', 'User Registration successful!');
        }
        // dd($user_id);
        return redirect('userLogin')->with('success', 'Registration successful! Please log in.');
    }





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
            return Redirect::to('/userDashboard');
            // echo 'success';
        } else {
            return redirect('userLogin')->with('Fail', 'Login fail! Please log in again.');
        }
    }




    public function user_dashboard()
    {
        // echo 'user dashboard';
        $data = null;
        if (Session::has('userId')) {
            $userId = Session::get('userId');
            $userData = DB::table('user_info')->find($userId);
            // dd($empData);
            $allUserData = DB::table('user_info')->get();
        }
        // dd($userData);
        return view('dashboard.user.userDashboard', compact('userData', 'allUserData'));
    }

    public function logout()
    {
        Session::flush();
        return redirect('userLogin');
    }



    public function editUserProfile($id)
    {
        $data = null;
        $userData = DB::table('user_info')->find($id);
        if ($userData) {
            $editAdmin = $userData;
            return view('dashboard.user.userEdit.editUserProfile', compact('userData'));
        } else {
            return redirect('userDashboard');
        }
    }


    public function update_user_Profile(Request $request, $id)
    {

        $userData = DB::table('user_info')
            ->where('id', $id)
            ->first();

        if (!$userData) {
            return redirect("/edituserprofile");
        }
        
        $request->validate([
            'owner_number' => 'unique:user_info,owner_number,' . $id,
        ]);

        if ($userData) {
            if ($request->hasFile('owner_image')) {
                $request->validate([
                    'owner_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                $owner_image = $request->file('owner_image')->move('images/owner_image');
            } else {
                $owner_image = $userData->owner_image;
            }

            $userData = DB::table('user_info')
                ->where('id', $id)
                ->update([
                    'owner_name' => $request->input('owner_name'),
                    'organization_name' => $request->input('organization_name'),
                    'owner_number' => $request->input('owner_number'),
                    'owner_image' => $owner_image,
                    'owner_address' => $request->input('owner_address'),
                    'business_type' => $request->input('business_type'),

                ]);

            if ($userData) {
                return redirect("/userDashboard")->with('Success', 'Profile updated successfully');
            } else {
                return redirect("/userDashboard")->with('Fail', 'Profile update failed');
            }
        }
    }
}
