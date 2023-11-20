<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class EmployeeController extends Controller
{


    public function emp_register()
    {
        $empJson = file_get_contents(storage_path('employee_ids.json'));
        $nonMatchingData = json_decode($empJson, true);

        // dd($nonMatchingData);

        $allEmpData = DB::table('employee_info')->get();
        $allempId = [];
        foreach ($allEmpData as $empData) {
            $allempId[] = $empData->emp_id;
        }



        return view('auth.emp_register', compact('nonMatchingData', 'allempId'));
    }

    public function register_emp(Request $request)
    {
        $request->validate([
            'emp_name' => 'required|string|max:50',
            'emp_number' => 'required|string|max:11|unique:employee_info',
            'emp_role' => 'required|in:Sales and Marketing Office,Marketing Officer,Sales Officer',
            'emp_id' => 'required|string',
            'emp_address' => 'required|string',
            'emp_email' => 'required|string|email|unique:employee_info',
            'password' => 'required|string|min:4',
        ]);

        $userId = Session::get('id');
        $adminData = DB::table('admin_info')->find($userId);


        $user_id = DB::table('employee_info')->insert([
            'emp_name' => $request->input('emp_name'),
            'emp_number' => $request->input('emp_number'),
            'emp_role' => $request->input('emp_role'),
            'emp_id' => $request->input('emp_id'),
            'emp_address' => $request->input('emp_address'),
            'emp_email' => $request->input('emp_email'),
            'password' => $request->input('password'),

            'supperAdmin_id' => $adminData->id,
            'supperAdmin_name' => $adminData->admin_name,


            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect('empLogin')->with('success', 'Registration successful! Please log in.');
    }

    public function emp_login()
    {
        return view('auth.emp_login');
    }

    public function login_emp(Request $request)
    {
        $request->validate([
            'emp_email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $result = DB::table('employee_info')
            ->where('emp_email', $request->input('emp_email'))
            ->where('password', $request->input('password'))
            ->first();

        if ($result) {
            Session::put('empId', $result->id);
            Session::put('emp_email', $request->emp_email);
            return Redirect::to('/empDashboard');
            // echo 'success';
        } else {
            return redirect('empLogin')->with('Fail', 'Login fail! Please log in again.');
        }
    }


    public function emp_dashboard()
    {
        $data = null;
        if (Session::has('empId')) {
            $userId = Session::get('empId');
            $empData = DB::table('employee_info')->find($userId);
            // dd($empData);
            $allEmpData = DB::table('employee_info')->get();
        }
        return view('dashboard.employee.empDashboard', compact('empData', 'allEmpData'));
    }

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
            return redirect('empDashboard')->with('Fail', 'Access denied. You do not have permission to edit this profile.');
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
            return redirect("/empDashboard")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/empDashboard")->with('Fail', 'Failed to update profile. Please try again.');
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
            return redirect('empDashboard')->with('Fail', 'Access denied. You do not have permission to edit this profile.');
        }
        if ($userInfo) {
            $editUserInfo = $userInfo;
            // dd($editAdmin);
            return view('dashboard.employee.empEdit.editUserInfoProfile', compact('editUserInfo'));
        } else {
            return redirect('empDashboard');
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
            return redirect("/empDashboard")->with('Fail', 'Profile update failed');
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
