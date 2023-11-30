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

        $packagesJson = file_get_contents(storage_path('package.json'));
        $packagesList = json_decode($packagesJson, true);

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
        $this->validate($request, [
            'title' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'details' => ['required', 'string']
        ]);


        $data = array();
        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['details'] = $request->details;


        DB::table('package')->insert($data);
        session()->flash("message", "Package Added Successfully");


        return redirect('/admin/packageItem');
    }
}
