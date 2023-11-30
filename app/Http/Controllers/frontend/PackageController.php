<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function package_page()
    {
        $packagesJson = file_get_contents(storage_path('package.json'));
        $packagesList = json_decode($packagesJson, true);
        return view('package', compact('packagesList'));
    }

    public function add_pack()
    {

        echo "hello";
     

    }
}
