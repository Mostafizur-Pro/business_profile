<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;




class AdminController extends Controller
{


  
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
            return redirect('admin/dashboard');
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
                    return redirect("/admin/profile")->with('success', 'Profile updated successfully');
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


    // ---------------------------------------- End User Info  ----------------------------------------



    // ---------------------------------------- Start User Info Old ----------------------------------------

    
    // ---------------------------------------- End User Info Old ----------------------------------------




    // ---------------------------------------- Start Emp Info ----------------------------------------


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
                    ->orWhere('division', 'LIKE', '%' . $search . '%');
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
            'division' => $request->input('division'),
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
            'division' => $update->division,
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
