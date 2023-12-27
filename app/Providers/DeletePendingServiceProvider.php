<?php

namespace App\Providers;
use Session;
use DB;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class DeletePendingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            if(DB::table('pending')){
                $pendingData = DB::table('pending');
                
                $view->              
                 with('pendingData', $pendingData);
            }
           
    });
}
}
