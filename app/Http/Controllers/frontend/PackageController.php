<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Carbon\Carbon;

class PackageController extends Controller
{
    public function package_page()
    {
        $packagesList = Package::get();

        return view('package', compact('packagesList'));
    }

    public function add_pack()
    {

        echo "hello";
    }
    public function package_order($id)
    {
        $packagesOrder = Package::find($id);
        $packagesList = Package::get();
        // $todayDate = Carbon::now()->format('F d, Y');
        $currentDate = Carbon::now();
        $todayDate = $currentDate->addMonth()->format('F d, Y');
        // dd($packagesOrder);
        return view('components/package/packageOrder', compact('packagesOrder', 'todayDate', 'packagesList'));
    }
}
