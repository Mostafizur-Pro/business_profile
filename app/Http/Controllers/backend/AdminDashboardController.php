<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminDashboardController extends Controller
{
    public function admin_dashboard()
    {
        if (Session::has('id')) {
            $userId = Session::get('id');
            $data = DB::table('admin_info')->find($userId);
            $allData = DB::table('admin_info')->get();

            if ($data) {
                return view('dashboard.admin.adminDashboard', compact('data', 'allData'));
            }
        }

        // If the user is not logged in or no valid data is found, redirect with a flash message.
        return redirect('/admin')
            ->with('Fail', 'You are not authorized to access the admin dashboard.');
    }
}
