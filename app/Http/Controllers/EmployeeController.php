<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class EmployeeController extends Controller
{
 

 

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }


    public function editEmpProfile($id)
    {
        $data = null;
        $empUser = DB::table('employee_info')->find($id);
        $userId = Session::get('empId');
        // dd($empUser);
        if ($empUser && $empUser->id === $userId) {
            $editEmp = $empUser;
            return view('dashboard.employee.empEdit.editEmpProfile', compact('editEmp'));
        } else {
            return redirect('/employee/dashboard')->with('Fail', 'Access denied. You do not have permission to edit this profile.');
        }
    }

    public function update_Emp_Profile(Request $request, $id)
    {
        $update = DB::table('employee_info')
            ->where('id', $id)
            ->first();

        if (!$update) {
            return redirect("/admin/edit_emp_profile/$id")->with('Fail', 'Record not found');
        }
        $request->validate([
            'emp_number' => 'unique:employee_info,emp_number,' . $id,
        ]);
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
            return redirect("/employee/dashboard")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/employee/dashboard")->with('Fail', 'Failed to update profile. Please try again.');
        }
    }

    public function editUserInfoProfile($id)
    {
        $data = null;
        $userInfo = DB::table('user_info')->find($id);
        // dd($userInfo->emp_id);

        $userId = Session::get('empId');
        $empUser = DB::table('employee_info')->find($userId);


        // dd($empUser->emp_id);

        if ($userInfo->emp_id !== $empUser->emp_id) {
            return redirect('/employee/dashboard')->with('Fail', 'Access denied. You do not have permission to edit this profile.');
        }
        if ($userInfo) {
            $editUserInfo = $userInfo;
            // dd($editAdmin);
            return view('dashboard.employee.empEdit.editUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('/employee/dashboard');
        }
    }

    public function update_user_Profile(Request $request, $id)
    {
        $update = DB::table('user_info')
            ->where('id', $id)
            ->first();

        if (!$update) {
            return redirect("/edit_user_profile/$id")->with('Fail', 'Record not found');
        }




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
            'owner_address' => $request->input('owner_address'),
            'business_type' => $request->input('business_type'),
            'owner_email' => $request->input('owner_email'),
            'owner_number' => $request->input('owner_number'),
            'owner_image' => $user_image,
        ];

        // dd($updateData);
        // Perform the update
        $result = DB::table('user_info')
            ->where('id', $id)
            ->update($updateData);


        if ($result) {
            return redirect("/userInfo_emp")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/employee/dashboard")->with('Fail', 'Profile update failed');
        }
    }

    public function user_info(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $userId = Session::get('empId');
        $empData = DB::table('employee_info')->find($userId);

        $empId = $empData->emp_id;

        // dd($empId);

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
            })
            ->when(isset($empId), function ($query) use ($empId) {
                // Add a condition to match 'emp_id' with the 'empId' value
                $query->where('emp_id', $empId);
            });

        $userInfoEmp = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($userInfoEmp);

        return view('dashboard/employee/userInfo', compact('userInfoEmp'));
    }
}
