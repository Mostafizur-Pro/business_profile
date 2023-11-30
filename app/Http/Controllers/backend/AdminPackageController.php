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
        return view('dashboard.admin.package');
    }
    public function add_package_List()
    {
        return view('dashboard.admin.add_Package');
    }

    public function add_package()
    {

        return view('dashboard.admin.add_Package');
        // // Create a new Package instance and fill it with the validated data
        // $package = new Package();
        // $package->title = $validatedData['title'];
        // $package->price = $validatedData['price'];
        // $package->details = $validatedData['details'];

        // // Save the package to the database
        // $package->save();

        // // Access the ID after insertion
        // $user = $package->id;

    }

    public function store_package(Request $request)
{
    $this->validate($request, [
        'title' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'details' => ['required', 'string']
    ]);
    $data=array();
    $data['title']=$request->title;
    $data['price']=$request->price;
    $data['details']=$request->details;
    DB::table('package')->insert($data);
    session()->flash("message", "Package Added Successfully");
    return redirect('/admin/package-list');
    


    // dd($request);

    // $package = new Package;
    // $package->title = $request->title;
    // $package->price = $request->price;
    // $package->details = $request->details;

    // if ($package->save()) {
    //     return redirect()->back()->with('success', 'Package successfully added.');
    // } else {
    //     return redirect()->back()->with('error', 'Error adding package.');
    // }
}

    // public function addPackage(Request $request)
    // {
    //     // Validate the request data
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'price' => 'required|numeric',
    //         'details' => 'required|string',
    //     ]);

    //     // Create a new Package instance and fill it with the validated data
    //     $package = new Package;
    //     $package->title = $validatedData['title'];
    //     $package->price = $validatedData['price'];
    //     $package->details = $validatedData['details'];

    //     // Save the package to the database
    //     $package->save();

    //     // Access the ID after insertion
    //     $user = $package->id;

    //     // Redirect or do something else after the data is saved
    //     //      return Redirect::to('/addpackage')->with('Success','Account has been created.');
    // }


    


}
