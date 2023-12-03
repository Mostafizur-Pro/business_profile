<?php

namespace App\Http\Controllers\backend\employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
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



    
    public function package_List()
    {

        $packagesJson = file_get_contents(storage_path('package.json'));
        $packagesList = json_decode($packagesJson, true);

        // dd($packagesList);
            //   return view('package', compact('packagesList'));
        return view('dashboard.employee.package', compact('packagesList'));
    }
}
