<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function country()
    {
        return view('layouts/companies/country');
    }

    public function product()
    {
        return view('layouts/companies/product');
    }
}
