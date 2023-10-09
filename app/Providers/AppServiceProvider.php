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
            $data = null; // Set a default value for $data
            if (Session::has('id')) {
                $userId = Session::get('id');
                $adminData = DB::table('admin_info')->find($userId);
                $view->
                with('adminData', $adminData);
                            }

            if(Session::has('empId')){
                $userId = Session::get('empId');
                $empData = DB::table('employee_info')->find($userId);
                $view->with('empData', $empData);
            }
            if(Session::has('userId')){
                $userId = Session::get('userId');
                $userData = DB::table('user_info')->find($userId);
                $view->with('userData', $userData);
            }
           
        });
    }
}
