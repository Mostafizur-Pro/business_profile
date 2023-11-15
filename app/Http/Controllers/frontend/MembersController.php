<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function our_clients(){
        echo 'our  clients';
    }

    public function our_old_clients(){
        echo 'our old clients';
    }

    public function our_employees(){
        echo 'our oemployees';
    }
}
