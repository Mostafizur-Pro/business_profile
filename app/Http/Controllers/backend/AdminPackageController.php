<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Package;


class AdminPackageController extends Controller
{

    public function package_List()
    {

        // $packagesJson = file_get_contents(storage_path('package.json'));
        // $packagesList = json_decode($packagesJson, true);

        $packagesList = Package::get();

        // dd($packagesList);
        //   return view('package', compact('packagesList'));
        return view('dashboard.admin.package', compact('packagesList'));
    }

    public function add_package()
    {
        return view('dashboard.admin.add_Package');
    }

    public function store_package(Request $request)
    {


        $admin = new Package();
        $admin->title = $request->input('title');
        $admin->price = $request->input('price');
        $admin->details = json_encode($request->input('details'));      
        $admin->description = $request->input('description');    
        
        $admin->save();

        return redirect('/admin/packageItem');
    }
}
