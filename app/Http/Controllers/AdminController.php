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






    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------
    // Mostafizur ----------------------------------------

    // ---------------------------------------- Start Admin Info  ----------------------------------------

    public function admin_info()
    {
        $allAdminData = DB::table('admin_info')->get();
        return view('dashboard/admin/adminInfo', compact('allAdminData'));
    }

    public function editAdminProfile($id)
    {
        $data = null;
        $adminUser = DB::table('admin_info')->find($id);
        if ($adminUser) {
            $editAdmin = $adminUser;
            return view('dashboard.admin.adminEdit.editAdminProfile', compact('editAdmin'));
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
                    return redirect()->back()->with('fail', 'Profile update failed');
                }
                
        }
    }

    public function makeSuperAdmin($id)
    {

        $update = DB::table('admin_info')
            ->where('id', $id)
            ->first();
        if (!$update) {
            return redirect('/adminInfo')->with('Fail', 'Fail ');
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
            return redirect('/adminInfo')->with('Fail', 'Fail ');
        }
        $result = DB::table('admin_info')
            ->where('id', $id)
            ->update([
                'role' => 'admin',
            ]);


        return redirect('/adminInfo')->with('Success', 'User is now an Admin.');
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

    // ---------------------------------------- End Admin Info  ----------------------------------------



    // ---------------------------------------- Start User Info  ----------------------------------------


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

    public function editUserInfoProfile($id)
    {
        $data = null;
        $userInfo = DB::table('user_info')->find($id);
        if ($userInfo) {
            $editUserInfo = $userInfo;
            // dd($editAdmin);
            return view('dashboard.admin.adminEdit.editUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('ad_userInfo');
        }
    }

    public function update_UserInfo(Request $request, $id)
    {
        // Find the user_info record by ID
        $update = DB::table('user_info')
            ->where('id', $id)
            ->first();

        // Check if the record exists
        if (!$update) {
            return redirect("/ad_edit_userInfo_profile/$id")->with('Fail', 'Record not found');
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
                $updateData['owner_id'] = $id;
                $updateData['password'] = $update->password;
                $updateData['emp_id'] = $update->emp_id;
                $updateData['emp_name'] = $update->emp_name;
                $updateData['adminTime'] = now();

                $result = DB::table('pending')
                    ->where('id', $id)
                    ->insert($updateData);
                if ($result) {

                    $updateUserData = [
                        'pending' => 'pending'
                    ];

                    $updateUserInfo = DB::table('user_info')
                        ->where('id', $id)
                        ->update($updateUserData);
                }
            } else {
                $updateData['supperAdmin_id'] = $adminData->id;
                $updateData['supperAdmin_name'] = $adminData->admin_name;
                $updateData['supperAdminTime'] = now();
                $result = DB::table('user_info')
                    ->where('id', $id)
                    ->update($updateData);
            }
        }



        if ($result) {
            return redirect("/ad_userInfo")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/ad_userInfo")->with('Fail', 'Profile update failed');
        }
    }

    public function delete_userInfo($id)
    {
        // Find the user with the given ID
        $user = DB::table('user_info')->find($id);

        if ($user) {
            $adminId = Session::get('id');
            $adminData = DB::table('admin_info')->find($adminId);

            if ($adminData->role === 'admin') {
                // Prepare the data you want to update
                $dataToUpdate = [
                    'admin_id' => $adminData->id,
                    'admin_name' => $adminData->admin_name,
                    'adminTime' => now(),
                    'pending' => 'delete', // You were overwriting the $user variable here
                ];

                // Update the user_info record with the new data
                $result = DB::table('user_info')
                    ->where('id', $id)
                    ->update($dataToUpdate); // Use update instead of insert for updating data

                // dd($result);
                if ($result) {
                    // The update was Successful
                    return redirect('/userInfo')->with('Success', 'ID Delete Successfully.');
                } else {
                    // The update failed
                    return redirect('/userInfo')->with('Fail', 'Delete Fail, Please try again');
                }
            }
            if ($adminData->role === 'superAdmin') {
                $deleted = DB::table('user_info')->where('id', $id)->delete();
                if ($deleted) {
                    // The update was Successful
                    return redirect('/userInfo')->with('Success', 'ID Delete Successfully.');
                } else {
                    // The update failed
                    return redirect('/userInfo')->with('Fail', 'Delete Fail, Please try again');
                }
            }
        }

        // User not found or admin role doesn't match
        return redirect('/userInfo')->with('Fail', 'Delete Fail, Please try again');
    }

    public function delete_user_info(Request $request)
    {
        // echo 'delete user';

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

        return view('dashboard/admin/delete', compact('userInfoNew'));
    }
    // -------------------------------------------- Delete Info 
    public function reverseUserInfoProfile($id)
    {
        // Find the user with the given ID
        $user = DB::table('user_info')->find($id);

        if ($user) {
            $adminId = Session::get('id');
            $adminData = DB::table('admin_info')->find($adminId);

            if ($adminData->role === 'superAdmin') {
                // Prepare the data you want to update
                $dataToUpdate = [

                    'pending' => '',
                ];

                // Update the user_info record with the new data
                $result = DB::table('user_info')
                    ->where('id', $id)
                    ->update($dataToUpdate); // Use update instead of insert for updating data

                // dd($result);
                if ($result) {
                    // The update was Successful
                    return redirect('/deleteUserInfo')->with('Success', 'Reverse Successfully.');
                } else {
                    // The update failed
                    return redirect('/deleteUserInfo')->with('Fail', 'Reverse Fail, Please try again');
                }
            }
        }
    }

    public function delete_userInfo_per($id)
    {
        // Find the user with the given ID
        $user = DB::table('user_info')->find($id);

        if ($user) {

            $deleted = DB::table('user_info')->where('id', $id)->delete();

            if ($deleted) {
                // The update was Successful
                return redirect('/deleteUserInfo')->with('Success', 'ID Delete Successfully.');
            } else {
                // The update failed
                return redirect('/deleteUserInfo')->with('Fail', 'Delete Fail, Please try again');
            }
        }

        // User not found or admin role doesn't match
        return redirect('/deleteUserInfo')->with('Fail', 'Delete Fail, Please try again');
    }

    // ---------------------------------------- End User Info  ----------------------------------------



    // ---------------------------------------- Start User Info Old ----------------------------------------

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

        // if($userInfoOld){
        //    Session::put('page', $userInfoOld->currentPage());
        // }
// $page=Session::has('page');
        // dd($userInfoOld->currentPage());
        // dd($page);

        return view('dashboard/admin/userInfoOld', compact('userInfoOld'));
    }

    public function editUserInfoOldProfile($id)
    {
        $data = null;
        $userInfo = DB::table('user_login_information')->find($id);
        if ($userInfo) {
            $editUserInfoOld = $userInfo;
            // dd($editUserInfoOld);
            return view('dashboard.admin.adminEdit.editUserInfoOldProfile', compact('editUserInfoOld'));
        } else {
            return redirect('userInfo');
        }
    }


    public function update_UserInfoOld_Profile(Request $request, $id)
    {
        // Find the user_info record by ID
        $update = DB::table('user_login_information')
            ->where('id', $id)
            ->first();

        // Check if the record exists
        if (!$update) {
            return redirect("/edit_userInfoOld_profile/$id")->with('Fail', 'Record not found');
        }

        // Prepare data for update
        $updateData = [
            'owner_name' => $request->input('owner_name'),
            'organization_name' => $request->input('organization_name'),
            'business_type' => $request->input('business_type'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
        ];


        $result = DB::table('user_login_information')
            ->where('id', $id)
            ->update($updateData);
dd($updateData);

        if ($result) {
            return redirect("/userInfoOld")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/userInfoOld")->with('Fail', 'Profile update failed');
        }
    }

    // ---------------------------------------- End User Info Old ----------------------------------------




    // ---------------------------------------- Start Emp Info ----------------------------------------


    public function emp_info()
    {
        $allEmpData = DB::table('employee_info')->get();
        return view('dashboard.admin.empInfo', compact('allEmpData'));
    }

    public function editEmpProfile($id)
    {
        $data = null;
        $empUser = DB::table('employee_info')->find($id);
        if ($empUser) {
            $editEmp = $empUser;
            return view('dashboard.admin.adminEdit.editEmpProfile', compact('editEmp'));
        } else {
            return view('dashboard.admin.empInfo');
        }
    }


    public function update_Emp_Profile(Request $request, $id)
    {
                $update = DB::table('employee_info')
            ->where('id', $id)
            ->first();

                if (!$update) {
            return redirect("/edit_emp_profile/$id")->with('Fail', 'Record not found');
        }

        // dd($update);

                if ($request->hasFile('emp_image')) {
            $uploadedImage = $request->file('emp_image');
            $imagePath = $uploadedImage->move('images/emp_image');
            $user_image = $imagePath; 
        } else {
            $user_image = $update->emp_image; 
        }

                $updateData = [
            'emp_name' => $request->input('emp_name'),
            'emp_address' => $request->input('emp_address'),
            'emp_role' => $request->input('emp_role'),
            'emp_email' => $update->emp_email,
            'emp_number' => $request->input('emp_number'),
            'emp_image' => $user_image,
        ];

        // dd($request);

        $result = DB::table('employee_info')
            ->where('id', $id)
            ->update($updateData);


        if ($result) {
            return redirect("/empInfo")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/empInfo")->with('Fail', 'Failed to update profile. Please try again.');
        }
        
    }

    public function delete_empInfo($id)
    {

        $deleted = DB::table('employee_info')->where('id', $id)->delete();

        if ($deleted) {
            // The update was Successful
            return redirect('/empInfo')->with('Success', 'ID Delete Successfully.');
        } else {
            // The update failed
            return redirect('/empInfo')->with('Fail', 'Delete Fail, Please try again');
        }
    }

    // ---------------------------------------- End Emp Info ----------------------------------------


    // ---------------------------------------- Start Pending User Info ----------------------------------------

    public function pending_user_info(Request $request)
    {

        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = DB::table('pending')
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

        return view('dashboard/admin/pending', compact('userInfoNew'));
    }

    public function editPendingUserInfoProfile($id)
    {
        $data = null;
        $userInfo = DB::table('pending')->find($id);
        if ($userInfo) {
            $editUserInfo = $userInfo;
            // dd($editAdmin);
            return view('dashboard.admin.adminEdit.editPendingUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('userInfo');
        }
    }

    public function update_PendingUserInfoProfile_Profile(Request $request, $id)
    {
        // Find the user_info record by ID
        $update = DB::table('pending')
            ->where('id', $id)
            ->first();

        // Check if the record exists
        if (!$update) {
            return redirect("/edit_pendingUserInfo_profile/$id")->with('Fail', 'Record not found');
        }


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

        // dd($updateData);
        // Perform the update
        $result = DB::table('pending')
            ->where('id', $id)
            ->update($updateData);



        if ($result) {
            return redirect("/pendingUserInfo")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/pendingUserInfo")->with('Fail', 'Profile update failed');
        }
    }


    public function confirm_PendingUserInfoProfile_Profile(Request $request, $id)
    {
        // Find the user_info record by ID
        $update = DB::table('pending')
            ->where('id', $id)
            ->first();

        // Check if the record exists
        if (!$update) {
            return redirect("/pendingUserInfo/$id")->with('Fail', 'Confirm not found');
        }

        $userInfo = DB::table('user_info')
            ->where('id', $update->owner_id)
            ->first();


        $updateData = [
            'owner_name' => $update->owner_name,
            'organization_name' => $update->organization_name,
            'owner_image' => $update->owner_image,
            'owner_number' => $update->owner_number,
            'owner_address' => $update->owner_address,
            'business_type' => $update->business_type,
            'owner_email' => $update->owner_email,
            // 'password' => $update->password,
            'owner_role' => $update->owner_role,
            'emp_id' => $update->emp_id,
            'emp_name' => $update->emp_name,
            'admin_id' => $update->admin_id,
            'admin_name' => $update->admin_name,
            'adminTime' => $update->adminTime,
            'pending' => '',
        ];

        $adminId = Session::get('id');
        $adminData = DB::table('admin_info')->find($adminId);

        if ($adminData) {
            $updateData['supperAdmin_id'] = $adminData->id;
            $updateData['supperAdmin_name'] = $adminData->admin_name;
            $updateData['supperAdminTime'] = now();
        }


        $result = DB::table('user_info')
            ->where('id', $userInfo->id)
            ->update($updateData);


        if ($result) {
            $deletePendingInfo = DB::table('pending')->where('id', $id)->delete();
            if ($deletePendingInfo) {
                return redirect("/pendingUserInfo")->with('Success', 'Profile updated Successfully');
            }
        }
    }
    // ---------------------------------------- End Pending User Info ----------------------------------------




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
