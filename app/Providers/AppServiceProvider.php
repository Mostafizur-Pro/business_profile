<?php

namespace App\Providers;

use App\Models\Admin;
use Session;
use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //

    // }
    public function boot()
    {
        View::composer('*', function ($view) {
            $adminData = null;
            $empData = null;
            $userData = null;

            if (Session::has('id')) {
                $userId = Session::get('id');
                $adminData = DB::table('admin_info')->find($userId);
            }

            if (Session::has('empId')) {
                $userId = Session::get('empId');
                $empData = DB::table('employee_info')->find($userId);
            }

            if (Session::has('userId')) {
                $userId = Session::get('userId');
                $userData = DB::table('user_info')->find($userId);
            }

            if (DB::table('pending')) {
                $pendingData = DB::table('pending')->get();
                // dd($pendingData);

                $view->with('pendingData', $pendingData);
            }

            if (DB::table('user_info')) {
                $deleteData = DB::table('user_info')->where('pending', 'delete')->get();

                // dd($deleteData);

                $view->with('deleteData', $deleteData);
            }

            $view->with('adminData', $adminData)
                ->with('empData', $empData)
                ->with('userData', $userData);
        });
    }
}
