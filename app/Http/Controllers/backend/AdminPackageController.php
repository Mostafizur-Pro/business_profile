<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class AdminPackageController extends Controller
{

    public function package_List()
    {
        return view('dashboard.admin.package');
    }
    public function add_package_List()
    {
        return view('dashboard.admin.addPackage');
    }

    public function store(Request $request)
    {
         // Validate the request data
         $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'required|string',
        ]);

        // Create a new Package instance and fill it with the validated data
        $package = new Package();
        $package->title = $validatedData['title'];
        $package->price = $validatedData['price'];
        $package->details = $validatedData['details'];

        // Save the package to the database
        $package->save();

        // Access the ID after insertion
        $user = $package->id;

    }



    public function addPackage(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'required|string',
        ]);

        // Create a new Package instance and fill it with the validated data
        $package = new Package;
        $package->title = $validatedData['title'];
        $package->price = $validatedData['price'];
        $package->details = $validatedData['details'];

        // Save the package to the database
        $package->save();

        // Access the ID after insertion
        $user = $package->id;

        // Redirect or do something else after the data is saved
        //      return Redirect::to('/addpackage')->with('Success','Account has been created.');
    }
}
