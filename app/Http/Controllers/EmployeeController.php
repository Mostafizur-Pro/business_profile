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

 

   
}
