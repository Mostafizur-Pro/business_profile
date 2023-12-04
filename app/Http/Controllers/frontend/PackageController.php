<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PackageController extends Controller
{
    public function package_page()
    {
        $packagesJson = file_get_contents(storage_path('package.json'));
        $packagesList = json_decode($packagesJson, true);

        // $data = DB::table('packages')->get();
        // dd($data);

        // DB::table('package')->insert($data);

        return view('package', compact('packagesList'));
    }

    public function add_pack()
    {

        echo "hello";
     

    }
}
