<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class UserDashboardController extends Controller
{
    public function user_dashboard()
    {
        // echo 'user dashboard';
        $data = null;
        if (Session::has('userId')) {
            $userId = Session::get('userId');
            $userData = User::find($userId);
            // dd($empData);
            $allUserData = User::get();
        }
        // dd($userData);
        return view('dashboard.user.userDashboard', compact('userData', 'allUserData'));
    }
    
    public function user_profile()
    {
        // echo 'user dashboard';
        $data = null;
        if (Session::has('userId')) {
            $userId = Session::get('userId');
            $userData = User::find($userId);
            // dd($empData);
            $allUserData = User::get();
        }
        // dd($userData);
        return view('dashboard.user.userProfile', compact('userData', 'allUserData'));
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }



    public function editUserProfile($id)
    {
        $data = null;
        $userData = User::find($id);
        if ($userData) {
            $editAdmin = $userData;
            return view('dashboard.user.userEdit.editUserProfile', compact('userData'));
        } else {
            return redirect('/user/dashboard');
        }
    }


    public function update_user_Profile(Request $request, $id)
    {

        $userData = User::where('id', $id)
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
                $owner_image = $request->file('owner_image')->move('images/user/profile');
            } else {
                $owner_image = $userData->owner_image;
            }



            // if ($request->hasFile('owner_image')) {
            //     $imagePath = $request->file('image')->move('images/post', uniqid() . '.' . $request->file('image')->extension());
            //     $post['image'] = 'images/post/' . basename($imagePath);
            // }

            $userData = User::where('id', $id)
                ->update([
                    'owner_name' => $request->input('owner_name'),
                    'organization_name' => $request->input('organization_name'),
                    'owner_number' => $request->input('owner_number'),
                    'owner_image' => $owner_image,
                    'division' => $request->input('division'),
                    'business_type' => $request->input('business_type'),

                ]);

            if ($userData) {
                return redirect("/user/dashboard")->with('Success', 'Profile updated successfully');
            } else {
                return redirect("/user/dashboard")->with('Fail', 'Profile update failed');
            }
        }
    }

    public function package_List()
    {

        $packagesList = Package::get();

        // dd($packagesList);
            //   return view('package', compact('packagesList'));
        return view('dashboard.user.package', compact('packagesList'));
    }
}
