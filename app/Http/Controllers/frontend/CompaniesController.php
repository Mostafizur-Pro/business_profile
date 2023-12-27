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
        $district = $request->input('district');

        $divisions = DB::table('division')->get();

        $data = User::where('district', 'LIKE', '%' . $district . '%')->get();

        return view('layouts.companies.country', compact('data', 'divisions'));
    }


    public function product()
    {
        return view('layouts/companies/product');
    }
}
