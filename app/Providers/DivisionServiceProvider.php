<?php

namespace App\Providers;

use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DivisionServiceProvider extends ServiceProvider
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
            $divisions = DB::table('division')->get();
            $areas = DB::table('area')->get();

            $view->with('divisions', $divisions)
                ->with('areas', $areas);
        });
    }
}
