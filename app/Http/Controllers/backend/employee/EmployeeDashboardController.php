<?php

namespace App\Http\Controllers\backend\employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class EmployeeDashboardController extends Controller
{
    public function emp_dashboard()
    {
        $data = null;
        if (Session::has('empId')) {
            $userId = Session::get('empId');
            $empData = EmployeeInfo::find($userId);
            // dd($empData);
            $allEmpData = EmployeeInfo::get();
        }
        return view('dashboard.employee.empDashboard', compact('empData', 'allEmpData'));
    }

    // Employee Edit Page show
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

    // Update Employee Info
    public function update_emp_Profile(Request $request, $id)
    {

        // dd($request);
        $update = DB::table('employee_info')
            ->where('id', $id)
            ->first();

        // dd($update);
        if (!$update) {
            return redirect("/edit_user_profile/$id")->with('Fail', 'Record not found');
        }




        if ($request->hasFile('emp_image')) {
            $request->validate([
                'emp_image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $emp_image = $request->file('emp_image')->move('images/employee', $id . '_' . uniqid() . '.' . $request->file('emp_image')->extension());
            // dd($emp_image);
        } else {
            $emp_image = $update->emp_image;
        }

        $updateData = [
            'emp_name' => $request->input('emp_name'),
            'emp_number' => $request->input('emp_number'),
            'emp_address' => $request->input('emp_address'),
            'emp_image' => $emp_image,

        ];

        // dd($updateData);
        // Perform the update
        $result = DB::table('employee_info')
            ->where('id', $id)
            ->update($updateData);


        if ($result) {
            return redirect("employee/dashboard")->with('Success', 'Profile updated Successfully');
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
                    ->orWhere('division', 'LIKE', '%' . $search . '%');
            })
            ->when(isset($empId), function ($query) use ($empId) {
                // Add a condition to match 'emp_id' with the 'empId' value
                $query->where('emp_id', $empId);
            });

        $userInfoEmp = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($userInfoEmp);

        return view('dashboard/employee/userInfo', compact('userInfoEmp'));
    }

    public function editUserInfoProfile($id)
    {
        $data = null;
        $userInfo = DB::table('user_info')->find($id);
        // dd($userInfo);

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
            // $uploadedImage = $request->file('owner_image');
            // $imagePath = $uploadedImage->store('images/user_image');
            // $user_image = $imagePath;
            $owner_image = $request->file('owner_image')->move('images/user', $id . '_' . uniqid() . '.' . $request->file('owner_image')->extension());
        } else {
            $owner_image = $update->owner_image;
        }

        $updateData = [
            'owner_name' => $request->input('owner_name'),
            'organization_name' => $request->input('organization_name'),
            'division' => $request->input('division'),
            'district' => $request->input('district'),
            'area' => $request->input('area'),
            'road' => $request->input('road'),
            'gender' => $request->input('gender'),
            'owner_image' => $owner_image,
            'business_type' => $request->input('business_type'),
            'owner_email' => $request->input('owner_email'),
            'owner_number' => $request->input('owner_number'),
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

    public function package_List()
    {

        $packagesList = Package::get();


        return view('dashboard.employee.package', compact('packagesList'));
    }
}
