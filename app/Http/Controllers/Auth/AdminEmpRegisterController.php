<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use Session;

class AdminEmpRegisterController extends Controller
{
    public function emp_register()
    {
        $empJson = file_get_contents(storage_path('employee_ids.json'));
        $nonMatchingData = json_decode($empJson, true);

        // dd($nonMatchingData);

        $allEmpData = EmployeeInfo::get();
        $allempId = [];
        foreach ($allEmpData as $empData) {
            $allempId[] = $empData->emp_id;       }



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

            'emp_nid' => 'required|string|unique:employee_info',
            'password' => 'required|string|min:4',
        ]);
        
        $userId = Session::get('id');
        $adminData = Admin::find($userId);
        
        // dd($request);

        $user_id = EmployeeInfo::insert([
            'emp_name' => $request->input('emp_name'),
            'emp_number' => $request->input('emp_number'),
            'emp_role' => $request->input('emp_role'),
            'emp_id' => $request->input('emp_id'),
            'emp_address' => $request->input('emp_address'),
            'emp_email' => $request->input('emp_email'),
            'emp_nid' => $request->input('emp_nid'),
            'password' => $request->input('password'),

            'supperAdmin_id' => $adminData->id,
            'supperAdmin_name' => $adminData->admin_name,


            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect('/admin/empInfo')->with('success', 'Registration successful! Please log in.');
    }
}
