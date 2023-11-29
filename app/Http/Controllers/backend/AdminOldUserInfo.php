<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;


class AdminOldUserInfo extends Controller
{
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
            return redirect("/admin/edit_userInfoOld_profile/$id")->with('Fail', 'Record not found');
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
        // dd($updateData);

        if ($result) {
            return redirect("/admin/userInfoOld")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/admin/userInfoOld")->with('Fail', 'Profile update failed');
        }
    }
}
