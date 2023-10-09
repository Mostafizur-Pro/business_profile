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



            // if ($user_id) {
            //     Session::put('empId', $result->empLogin);
            //     // Session::put('admin_email', $request->admin_email);
            //     return redirect('empLogin')->with('success', 'Registration successful! Please log in.');
            // } else {
            //     return redirect('empLogin')->with('Fail', 'Login fail! Please log in again.');
            // }
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
        return redirect('empLogin');
    }



    public function editEmpProfile($id)
    {
        $data = null;
        $empUser = DB::table('employee_info')->find($id);
        if ($empUser) {
            $editEmp = $empUser;
            return view('dashboard.employee.empEditProfile', compact('editEmp'));
        } else {
            return view('dashboard.employee.adminDashboard');
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
