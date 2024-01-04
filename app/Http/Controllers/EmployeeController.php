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

    // public function editEmpProfile($id)
    // {
    //     $data = null;
    //     $empUser = DB::table('employee_info')->find($id);
    //     $userId = Session::get('empId');
    //     // dd($empUser);
    //     if ($empUser && $empUser->id === $userId) {
    //         $editEmp = $empUser;
    //         return view('dashboard.employee.empEdit.editEmpProfile', compact('editEmp'));
    //     } else {
    //         return redirect('/employee/dashboard')->with('Fail', 'Access denied. You do not have permission to edit this profile.');
    //     }
    // }



    // public function update_Emp_Profile(Request $request, $id)
    // {
    //     $update = DB::table('employee_info')
    //         ->where('id', $id)
    //         ->first();

    //     if (!$update) {
    //         return redirect("/admin/edit_emp_profile/$id")->with('Fail', 'Record not found');
    //     }
    //     $request->validate([
    //         'emp_number' => 'unique:employee_info,emp_number,' . $id,
    //     ]);
    //     // dd($update);

    //     if ($request->hasFile('emp_image')) {
    //         $uploadedImage = $request->file('emp_image');
    //         $imagePath = $uploadedImage->move('images/emp_image');
    //         $user_image = $imagePath;
    //     } else {
    //         $user_image = $update->emp_image;
    //     }

    //     $updateData = [
    //         'emp_name' => $request->input('emp_name'),
    //         'emp_address' => $request->input('emp_address'),
    //         'emp_role' => $request->input('emp_role'),
    //         'emp_email' => $update->emp_email,
    //         'emp_number' => $request->input('emp_number'),
    //         'emp_image' => $user_image,
    //     ];

    //     // dd($request);

    //     $result = DB::table('employee_info')
    //         ->where('id', $id)
    //         ->update($updateData);


    //     if ($result) {
    //         return redirect("/employee/dashboard")->with('Success', 'Profile updated Successfully');
    //     } else {
    //         return redirect("/employee/dashboard")->with('Fail', 'Failed to update profile. Please try again.');
    //     }
    // }

   

   
}
