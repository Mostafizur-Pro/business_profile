<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;

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
}
