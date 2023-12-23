<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function country()
    {

        $data = User::get();
        return view('layouts/companies/country', compact('data', $data));
    }

    public function product()
    {
        return view('layouts/companies/product');
    }
}
