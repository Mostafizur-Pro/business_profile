<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    
    public function home_page()
    {
        return view('home');
    }
    public function service_page()
    {
        return view('service');
    }
    public function package_page()
    {
        return view('package');
    }

    public function about_page()
    {
        return view('about');
    }
    public function contact_page()
    {
        return view('contact');
    }
}
