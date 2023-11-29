<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function admin_dashboard()
    {
        if (Session::has('id')) {
            $userId = Session::get('id');
            $data = Admin::find($userId);
            $allData = Admin::get();
            if ($data) {
                return view('dashboard.admin.adminDashboard', compact('data', 'allData'));
            }
        }
        return redirect('/admin')
            ->with('Fail', 'You are not authorized to access the admin dashboard.');
    }

    public function admin_profile()
    {
        if (Session::has('id')) {
            $userId = Session::get('id');
            $data = Admin::find($userId);
            $allData = Admin::get();

            if ($data) {
                return view('dashboard.admin.adminProfile', compact('data', 'allData'));
            }
        }

        // If the user is not logged in or no valid data is found, redirect with a flash message.
        return redirect('/admin')
            ->with('Fail', 'You are not authorized to access the admin dashboard.');
    }
}
