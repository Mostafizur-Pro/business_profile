<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function country(Request $request)
    {
        $divisions = DB::table('division')->get();


        $district = $request->input('district');
        $division = $request->input('division');
        $areas = DB::table('area')->get();



        $location = $request->input('location');


        if ($location) {
            $data =  User::where('area', 'LIKE', $location . '%')->get();
        } elseif ($division) {
            $data =  User::where('division', 'LIKE', $division . '%')->get();
        } 
        else {

            $data = User::where('district', 'LIKE', '%' . $district . '%')->get();
        }


        return view('layouts.companies.country', compact('data', 'divisions'));
    }


    public function product()
    {
        return view('layouts/companies/product');
    }
}
