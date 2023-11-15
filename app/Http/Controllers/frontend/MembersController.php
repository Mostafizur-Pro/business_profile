<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function our_clients()
    {
        return view('layouts/members/ourClients');
    }

    public function our_old_clients()
    {
        return view('layouts/members/ourOldClients');
    }

    public function our_employees()
    {
        return view('layouts/members/ourEmployee');
    }
}
