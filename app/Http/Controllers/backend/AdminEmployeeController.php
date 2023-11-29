<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{

    public function emp_info()
    {
        $allEmpData = EmployeeInfo::get();
        return view('dashboard.admin.empInfo', compact('allEmpData'));
    }

    public function editEmpProfile($id)
    {
        $data = null;
        $empUser = EmployeeInfo::find($id);
        if ($empUser) {
            $editEmp = $empUser;
            return view('dashboard.admin.adminEdit.editEmpProfile', compact('editEmp'));
        } else {
            return view('dashboard.admin.empInfo');
        }
    }


    public function update_Emp_Profile(Request $request, $id)
    {
        $update = EmployeeInfo::where('id', $id)
            ->first();

        if (!$update) {
            return redirect("/admin/edit_emp_profile/$id")->with('Fail', 'Record not found');
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

        $result = EmployeeInfo::where('id', $id)
            ->update($updateData);


        if ($result) {
            return redirect("/admin/empInfo")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/admin/empInfo")->with('Fail', 'Failed to update profile. Please try again.');
        }
    }

    public function delete_empInfo($id)
    {

        $deleted = EmployeeInfo::where('id', $id)->delete();

        if ($deleted) {
            return redirect('/admin/empInfo')->with('Success', 'ID Delete Successfully.');
        } else {
            return redirect('/admin/empInfo')->with('Fail', 'Delete Fail, Please try again');
        }
    }
}
