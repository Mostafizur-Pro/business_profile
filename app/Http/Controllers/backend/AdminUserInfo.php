<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserInfo extends Controller
{

    public function user_info(Request $request)
    {

        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = User::select('*')
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

        return view('dashboard/admin/userInfo', compact('userInfoNew'));
    }

    public function editUserInfoProfile($id)
    {
        $data = null;
        $userInfo = User::find($id);
        if ($userInfo) {
            $editUserInfo = $userInfo;
            return view('dashboard.admin.adminEdit.editUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('userInfo');
        }
    }

    public function update_UserInfo(Request $request, $id)
    {
        $update = User::where('id', $id)
            ->first();
        if (!$update) {
            return redirect("/ad_edit_userInfo_profile/$id")->with('Fail', 'Record not found');
        }
        $request->validate([
            'owner_name' => 'required',
            'organization_name' => 'required',
            'owner_number' => 'required|max:11|unique:user_info,owner_number,' . $id,
            'division' => 'required',
            'business_type' => 'required',
            'owner_email' => 'required|email|unique:user_info,owner_email,' . $id,
            'owner_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('owner_image')) {
            $uploadedImage = $request->file('owner_image');
            $imagePath = $uploadedImage->store('images/user_image');
            $user_image = $imagePath;
        } else {
            $user_image = $update->owner_image;
        }

        $updateData = [
            'owner_name' => $request->input('owner_name'),
            'organization_name' => $request->input('organization_name'),
            'division' => $request->input('division'),
            'business_type' => $request->input('business_type'),
            'owner_email' => $request->input('owner_email'),
            'owner_number' => $request->input('owner_number'),
            'owner_image' => $user_image,
        ];


        $adminId = Session::get('id');
        $adminData = Admin::find($adminId);

        if ($adminData) {
            if ($adminData->role === 'admin') {
                $updateData['admin_id'] = $adminData->id;
                $updateData['admin_name'] = $adminData->admin_name;
                $updateData['owner_id'] = $id;
                $updateData['password'] = $update->password;
                $updateData['emp_id'] = $update->emp_id;
                $updateData['emp_name'] = $update->emp_name;
                $updateData['adminTime'] = now();

                $result = User::where('id', $id)
                    ->insert($updateData);
                if ($result) {

                    $updateUserData = [
                        'pending' => 'pending'
                    ];

                    $updateUserInfo = User::table('user_info')
                        ->where('id', $id)
                        ->update($updateUserData);
                }
            } else {
                $updateData['supperAdmin_id'] = $adminData->id;
                $updateData['supperAdmin_name'] = $adminData->admin_name;
                $updateData['supperAdminTime'] = now();
                $result = User::where('id', $id)
                    ->update($updateData);
            }
        }
        if ($result) {
            return redirect("admin/userInfo")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("admin/userInfo")->with('Fail', 'Profile update failed');
        }
    }

    public function delete_userInfo($id)
    {
        $user = User::find($id);

        if ($user) {
            $adminId = Session::get('id');
            $adminData = Admin::find($adminId);

            if ($adminData->role === 'admin') {
                $dataToUpdate = [
                    'admin_id' => $adminData->id,
                    'admin_name' => $adminData->admin_name,
                    'adminTime' => now(),
                    'pending' => 'delete', 
                ];

                $result = User::where('id', $id)->update($dataToUpdate);


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
                $deleted = User::where('id', $id)->delete();
                if ($deleted) {
                    // The update was Successful
                    return redirect('/admin/userInfo')->with('Success', 'ID Delete Successfully.');
                } else {
                    // The update failed
                    return redirect('/admin/userInfo')->with('Fail', 'Delete Fail, Please try again');
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

        $query = User::select('*')
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

        return view('dashboard/admin/delete', compact('userInfoNew'));
    }
    // -------------------------------------------- Delete Info 
    public function reverseUserInfoProfile($id)
    {
        // Find the user with the given ID
        $user = User::find($id);

        if ($user) {
            $adminId = Session::get('id');
            $adminData = Admin::find($adminId);

            if ($adminData->role === 'superAdmin') {
                // Prepare the data you want to update
                $dataToUpdate = [

                    'pending' => '',
                ];

                // Update the user_info record with the new data
                $result = User::where('id', $id)
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
        $user = User::find($id);

        if ($user) {

            $deleted = User::where('id', $id)->delete();

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
}
