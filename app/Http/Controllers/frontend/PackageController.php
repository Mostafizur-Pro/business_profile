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
        // dd($packagesList);
        // return view('room/room', compact('categoriesList', 'locationsList'));
        return view('package', compact('packagesList'));
    }
    
    public function add_pack()
    {

        echo "hello";
        // if (request()->isMethod("post"))
        // {
        //     request()->validate([
        //         "name" => ['required'],
        //         "price" => ['required'],
        //         "description" => ['required']
        //         ]);
        //         $data['name'] = request()->input('name');
        //         $data['price'] = request()->input('price');
        //         $data['description'] = request()->input('description');
                 
    }





    }

