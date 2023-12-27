<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
// use App\Http\Controllers\Hash;

class HomeController extends Controller
{



    public function home_page_new()
    {
        return view('home');
    }
    public function home_page()
    {
        return view('homepage');
    }
    public function about_page()
    {
        return view('about');
    }
    public function price()
    {
        return view('price');
    }
    public function faq()
    {
        return view('faq');
    }


    public function client_list(Request $request)
    {
        $perPage = $request->input('perPage', 10);

        $search = $request->input('search');
        $letter = $request->input('letter'); // Add 'letter' to the request parameters

        $query = DB::table('user_login_information')
            ->select('*')
            ->orderBy('owner_name', 'asc');

        if ($letter) {
            // Filter results by the selected letter
            $query->where('owner_name', 'LIKE', $letter . '%');
        } else {
            // Perform text-based search if 'letter' is not specified
            $query->when($search, function ($query) use ($search) {
                $query->where('employee_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('organization_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('contact_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('address', 'LIKE', '%' . $search . '%');
            });
        }

        $data = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($data);

        return view('clientList', ['data' => $data]);
    }


    public function new_client_list(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');
        $letter = $request->input('letter'); // Add 'letter' to the request parameters

        $query = DB::table('user_info')
            ->select('*')
            ->orderBy('owner_name', 'asc');

        if ($letter) {
            // Filter results by the selected letter
            $query->where('owner_name', 'LIKE', $letter . '%');
        } else {
            // Perform text-based search if 'letter' is not specified
            $query->when($search, function ($query) use ($search) {
                $query->where('business_type', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('organization_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_email', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('division', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_id', 'LIKE', '%' . $search . '%');
            });
        }

        $data = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($data);

        return view('newClientList', ['data' => $data]);
    //    return view('newClientList');
    }

    public function employee_list(Request $request)
    {
        // dd($request);
        $perPage = $request->input('perPage', 10);

        $search = $request->input('search');
        $letter = $request->input('letter'); // Add 'letter' to the request parameters

        $query = DB::table('employee_info')
            ->select('*')
            ->orderBy('emp_name', 'asc');

        if ($letter) {
            // Filter results by the selected letter
            $query->where('emp_name', 'LIKE', $letter . '%');
        } else {
            // Perform text-based search if 'letter' is not specified
            $query->when($search, function ($query) use ($search) {
                $query->where('emp_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_email', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_address', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('emp_role', 'LIKE', '%' . $search . '%');
            });
        }

        $data = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($data);

        return view('employeeList', ['data' => $data]);
    }
}
