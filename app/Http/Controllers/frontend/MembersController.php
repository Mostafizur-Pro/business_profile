<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function our_clients()
    {
        return view('layouts/members/ourClients');
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

    public function our_employees()
    {
        return view('layouts/members/ourEmployee');
    }
}
