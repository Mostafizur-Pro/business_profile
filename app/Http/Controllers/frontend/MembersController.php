<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function our_clients(Request $request)
    {
        $perPage = $request->input('perPage', 10);

        $search = $request->input('search');

        $letter = $request->input('letter'); // Add 'letter' to the request parameters

        $query = User::select('*')
            ->orderBy('owner_name', 'asc');
        //   dd($query);

        if ($letter) {
            // Filter results by the selected letter
            $query->where('owner_name', 'LIKE', $letter . '%');
        } else {
            // Perform text-based search if 'letter' is not specified
            $hi = $query->when($search, function ($query) use ($search) {
                $query->where('owner_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_email', 'LIKE', '%' . $search . '%')
                    ->orWhere('organization_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_number', 'LIKE', '%' . $search . '%')
                    ->orWhere('owner_address', 'LIKE', '%' . $search . '%');
            });
            // dd($hi);
        }


        $data = $query->paginate($perPage)->onEachSide(1)->withQueryString();
        // dd($data);

        return view('layouts/members/ourClients', ['data' => $data]);
        // return view('layouts/members/ourClients');
    }

    public function our_old_clients(Request $request)
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
        // dd($query);
        // dd($data);

        // return view('clientList', ['data' => $data]);
        return view('layouts/members/ourOldClients', ['data' => $data]);
    }

    public function our_employees(Request $request)
    {
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
        // dd($query);
        // dd($data);

        // return view('clientList', ['data' => $data]);
        return view('layouts/members/ourEmployee', ['data' => $data]);
    }
}
