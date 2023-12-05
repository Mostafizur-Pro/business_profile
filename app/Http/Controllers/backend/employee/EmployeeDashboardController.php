<?php

namespace App\Http\Controllers\backend\employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeInfo;
use App\Models\Package;
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

        $packagesList = Package::get();

       
        return view('dashboard.employee.package', compact('packagesList'));
    }
}
