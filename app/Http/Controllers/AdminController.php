<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;




class AdminController extends Controller
{


    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------



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
        return redirect('admin')->with('success', 'Registration successful! Please log in.');
    }


    public function admin_login()
    {
        return view('auth.admin_login');
    }


    public function login_admin(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $result = DB::table('admin_info')
            ->where('admin_email', $request->input('admin_email'))
            ->where('password', $request->input('password'))
            ->first();



        if ($result) {
            Session::put('id', $result->id);
            Session::put('admin_email', $request->admin_email);
            return Redirect::to('/adminDashboard');
        } else {
            return redirect('adminDashboard')->with('Fail', 'Login fail! Please log in again.');
        }
    }


    public function admin_dashboard()
    {
        $data = null;
        if (Session::has('id')) {
            $userId = Session::get('id');
            $data = DB::table('admin_info')->find($userId);
            $allData = DB::table('admin_info')->get();
        }
        if ($data && $allData) {
            return view('dashboard.admin.adminDashboard', compact('data', 'allData'));
        } else {
            return redirect('admin');
        }
    }








    public function admin_info()
    {
        $allAdminData = DB::table('admin_info')->get();
        return view('dashboard/admin/adminInfo', compact('allAdminData'));
    }

    public function emp_info()
    {
        $allEmpData = DB::table('employee_info')->get();
        return view('dashboard/admin/empInfo', compact('allEmpData'));
    }



    public function user_info_old(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = DB::table('user_login_information')
            ->select('*')
            ->when($search, function ($query) use ($search) {
                $query->where('employee_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('organization_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('contact_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('address', 'LIKE', '%' . $search . '%');
            });

        $userInfoOld = $query->paginate($perPage)->onEachSide(1)->withQueryString();

        return view('dashboard/admin/userInfoOld', compact('userInfoOld'));
    }



    public function user_info(Request $request)
    {

        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = DB::table('user_info')
            ->select('*')
            ->when($search, function ($query) use ($search) {
                $query->where('id', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('organization_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_email', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_role', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('business_type', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_address', 'LIKE', '%' . $search . '%');
            });

        $userInfoNew = $query->paginate($perPage)->onEachSide(1)->withQueryString();

        return view('dashboard/admin/userInfo', compact('userInfoNew'));
    }



    public function logout()
    {
        Session::flush();
        return redirect('/admin');
    }


    public function delete_admin($id)
    {
        $admin = DB::table('admin_info')->find($id);
        if ($admin) {
            DB::delete('delete from admin_info where id=?', [$id]);
            return redirect('/adminInfo')->with('Success', 'ID Delete Successfully.');
        } else {
            return redirect('/adminInfo')->with('Fail', 'Delate Fail, Please try again');
        }
    }


    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------

    // ---------------------------------------- Start User Info Edit ----------------------------------------
    public function editUserInfoProfile($id)
    {
        $data = null;
        $userInfo = DB::table('user_info')->find($id);
        if ($userInfo) {
            $editUserInfo = $userInfo;
            // dd($editAdmin);
            return view('dashboard.admin.edit.editUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('userInfo');
        }
    }

    public function update_InfoProfile_Profile(Request $request, $id)
    {
        // Find the user_info record by ID
        $update = DB::table('user_info')
            ->where('id', $id)
            ->first();
    
        // Check if the record exists
        if (!$update) {
            return redirect("/edit_userInfo_profile/$id")->with('error', 'Record not found');
        }
    
        $request->validate([
            'owner_name' => 'required',
            'organization_name' => 'required',
            'owner_number' => 'required|max:11|unique:user_info,owner_number,' . $id,
            'owner_address' => 'required',
            'business_type' => 'required',
            'owner_email' => 'required|email|unique:user_info,owner_email,' . $id,
            'owner_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle the owner image upload
        if ($request->hasFile('owner_image')) {
            $uploadedImage = $request->file('owner_image');
            $imagePath = $uploadedImage->store('images/user_image');
            $user_image = $imagePath; // Set to the new image path
        } else {
            $user_image = $update->owner_image; // Keep the existing image path
        }
    
        // Prepare data for update
        $updateData = [
            'owner_name' => $request->input('owner_name'),
            'organization_name' => $request->input('organization_name'),
            'owner_address' => $request->input('owner_address'),
            'business_type' => $request->input('business_type'),
            'owner_email' => $request->input('owner_email'),
            'owner_number' => $request->input('owner_number'),
            'owner_image' => $user_image,
        ];
    
        // Check and update admin/superadmin related data
        $adminId = Session::get('id');
        $adminData = DB::table('admin_info')->find($adminId);
    
        if ($adminData) {
            if ($adminData->role === 'admin') {
                $updateData['admin_id'] = $adminData->id;
                $updateData['admin_name'] = $adminData->admin_name;
                $updateData['adminTime'] = now();
            } else {
                $updateData['supperAdmin_id'] = $adminData->id;
                $updateData['supperAdmin_name'] = $adminData->admin_name;
                $updateData['supperAdminTime'] = now();
            }
        }
    
        // Perform the update
        $result = DB::table('user_info')
            ->where('id', $id)
            ->update($updateData);

            // dd($result);
    
        if ($result) {
            return redirect("/userInfo")->with('success', 'Profile updated successfully');
        } else {
            return redirect("/userInfo")->with('error', 'Profile update failed');
        }
    }
    


    // ---------------------------------------- End User Info Edit ----------------------------------------


    // ---------------------------------------- Start Admin Edit ----------------------------------------
    public function editAdminProfile($id)
    {
        $data = null;
        $adminUser = DB::table('admin_info')->find($id);
        if ($adminUser) {
            $editAdmin = $adminUser;
            return view('dashboard.admin.edit.editAdminProfile', compact('editAdmin'));
        } else {
            return redirect('adminDashboard');
        }
    }


    public function update_Admin_Profile(Request $request, $id)
    {
        $update = DB::table('admin_info')
            ->where('id', $id)
            ->first();


        if (!$update) {
            return redirect("/edit_admin_profile/$id");
        }

        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email|unique:admin_info,admin_email,' . $id,
            'number' => 'required',
            'admin_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($update) {
            if ($request->hasFile('admin_image')) {
                $request->validate([
                    'admin_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                $admin_image = $request->file('admin_image')->move('images/admin_image');
            } else {
                $admin_image = $update->admin_image;
            }

            $result = DB::table('admin_info')
                ->where('id', $id)
                ->update([
                    'admin_name' => $request->input('admin_name'),
                    'admin_email' => $request->input('admin_email'),
                    'number' => $request->input('number'),
                    'admin_image' => $admin_image,
                ]);

            if ($result) {
                return redirect("/adminDashboard")->with('success', 'Profile updated successfully');
            } else {
                return redirect("/adminDashboard")->with('success', 'Profile updated successfully');
            }
        }
    }
    // ---------------------------------------- End Admin Edit ----------------------------------------

    public function makeSuperAdmin($id)
    {

        $update = DB::table('admin_info')
            ->where('id', $id)
            ->first();
        if (!$update) {
            return redirect('/adminInfo')->with('Fail', 'Error ');
        }
        $result = DB::table('admin_info')
            ->where('id', $id)
            ->update([
                'role' => 'superAdmin',
            ]);


        return redirect('/adminInfo')->with('Success', 'User is now an Super Admin.');
    }

    public function makeAdmin($id)
    {
        $update = DB::table('admin_info')
            ->where('id', $id)
            ->first();
        if (!$update) {
            return redirect('/adminInfo')->with('Fail', 'Error ');
        }
        $result = DB::table('admin_info')
            ->where('id', $id)
            ->update([
                'role' => 'admin',
            ]);


        return redirect('/adminInfo')->with('Success', 'User is now an Admin.');
    }

    // Rafi ----------------------------------------
    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------




    // public function admin_dashboard()
    // {
    //     $id = Session::get('id');
    //     if ($id == 1) {
    //         $data = DB::table('user_login_information')->get();
    //         return view('admin.adminDashboard', ['data' => $data]);
    //     } else {
    //         return redirect('/admin');
    //     }
    // }

    // public function login_form_action(Request $request)
    // {
    //     $email = ($request->admin_email);
    //     $password = ($request->pass);

    //     $result = DB::table('admin_information')
    //         ->where('admin_email', $email)
    //         ->where('password', $password)
    //         ->first();

    //     $editor = DB::table('editor_information')
    //         ->where('editor_email', $email)
    //         ->where('editor_password', $password)
    //         ->first();

    //     if ($result) {
    //         Session::put('id', $result->id);
    //         // Session::put('user_id',$result->user_id);
    //         Session::put('admin_email', $request->admin_email);


    //         return Redirect::to('/admin_dashboard');
    //     } else if ($editor) {
    //         // Session::put('id',$result->id);
    //         Session::put('editor_email', $email);


    //         return Redirect::to('/editor_dashboard');
    //     } else {
    //         // return redirect()->with('flash_message_error','');
    //         echo "hoy nai";
    //     }
    // }

    // public function employee_list()
    // {
    //     $id = Session::get('id');
    //     if ($id == 1) {
    //         $data = DB::table('employee_information')->get();
    //         return view('admin.employeeList', ['data' => $data]);
    //     } else {
    //         return redirect('/admin');
    //     }
    // }

    // public function logout()
    // {
    //     Session::flush();
    //     return redirect('/admin');
    // }

    // public function edit($id)
    // {



    //     $id = Session::get('id');
    //     if ($id == 1) {
    //         $edit = DB::table('user_login_information')
    //             ->Where('id', $id)
    //             ->first();
    //         return view('admin.edit_profile')->with(compact('edit'));
    //     } else {
    //         return redirect('/admin');
    //     }
    // }



    // public function update(Request $request, $id)
    // {


    //     $update = DB::table('user_login_information')
    //         ->where('id', $id)
    //         ->first();

    //     if ($update) {
    //         $organization_name = $request->input('organization_name');
    //         $owner_name = $request->input('owner_name');
    //         $contact_number = $request->input('contact_number');
    //         $address = $request->input('address');
    //         $email = $request->input('email');
    //         $business_type = $request->input('business_type');

    //         DB::update(
    //             'update user_login_information set organization_name = ?, owner_name = ?, contact_number = ?, business_type= ?, address = ?, email= ? where id = ?',
    //             [
    //                 $organization_name,
    //                 $owner_name,
    //                 $contact_number,
    //                 $business_type,
    //                 $address,
    //                 $email,
    //                 $id

    //             ]
    //         );
    //         return redirect('/admin_dashboard');
    //     } else {
    //         return redirect('/edit/$id');
    //     }
    // }

    // public function delete_profile($id)
    // {
    //     $userid = Session::get('id');
    //     if ($userid == 1) {
    //         $delete = DB::table('user_login_information')
    //             ->where('id', $id)
    //             ->first();

    //         if ($delete) {
    //             DB::delete('delete from user_login_information where id= ?', [$id]);
    //             return redirect('/admin_dashboard');
    //         }
    //     } else {
    //         return redirect('/admin');
    //     }
    // }

    public function package_list()
    {
        $id = Session::get('id');
        if ($id == 1) {
            $id = Session::get('id');
            $data = DB::table('package_list')->get();

            return view('admin.packageList', ['data' => $data]);
        } else {
            return redirect('/admin');
        }
    }

    public function package_add()
    {
        $id = Session::get('id');
        if ($id == 1) {
            return view('admin.create_package');
        } else {
            return redirect('/admin');
        }
    }

    public function create_package(Request $request)
    {
        $data = array();
        $data['package_name'] = $request->package_name;
        $data['package_value'] = $request->package_value;
        $data['image_ad_count'] = $request->image_ad_count;
        $data['video_ad_count'] = $request->video_ad_count;
        $create = DB::table('package_list')->insertGetId($data);

        return redirect()->back();
    }

    public function pending_list()
    {
        $id = Session::get('id');
        if ($id == 1) {
            $data = DB::table('editor_request_userinfo')->get();
            return view('admin.pendingList', ['data' => $data]);
        } else {
            return redirect('/admin');
        }
    }

    public function delete_package($id)
    {
        $userid = Session::get('id');
        if ($userid == 1) {
            $delete = DB::table('package_list')
                ->where('id', $id)
                ->first();

            if ($delete) {
                DB::delete('delete from package_list where id= ?', [$id]);
                return redirect('/packageList');
            }
        } else {
            return redirect('/admin');
        }
    }
}
