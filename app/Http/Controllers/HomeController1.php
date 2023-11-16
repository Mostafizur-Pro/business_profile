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
                    ->orWhere('owner_address', 'LIKE', '%' . $search . '%')
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





    // public function user_card()
    // {
    //     $id = Session::get('id');
    //     $emp_id=Session::get('emp_id');
    //     $empinfo = DB::table('employee_information')
    //     ->where(['id'=>$id])->first();

    //     return view('UserPanel.user_card')->with(compact('empinfo'));
    // }


    // public function registration_form_action(Request $request)
    // {
    //     $id = Session::get('id');
    //     $emp_id=Session::get('emp_id');
    //     $empinfo = DB::table('employee_information')
    //     ->where(['id'=>$id])->first();

    //     $data=array();
    //     $data['organization_name']=$request->organization_name;
    //     $data['owner_name']=$request->owner_name;
    //     $data['contact_number']=$request->contact_number;
    //     $data['business_type']= $request->business_type;
    //     $data['address']=$request->address;
    //     $data['email']=$request->email;
    //     $data['employee_id']=$request->employee_id;
    //     $data['password']=MD5($request->password);
    //     $user=DB::table('user_login_information')->insertGetId($data);

    //     if($data['employee_id'] == $emp_id)
    //     {
    //         return Redirect::to('/empDashboard')->with(compact('empinfo'));

    //     }
    //     else{
    //         return view('/newUserRegistration')->with(compact('empinfo'));

    //     }

    //     // echo $user;

    // }
    // public function employee_registration_form_action(Request $request)
    // {
    //     $data=array();
    //     $data['emp_id']=$request->employee_id;
    //     $data['emp_name']=$request->emp_name;
    //     $data['emp_email']=$request->emp_email;
    //     $data['emp_phone']= $request->emp_phone;
    //     $data['designation']=$request->designation;
    //     $data['address']=$request->address;
    //     $data['joining_date']=$request->joining_date;
    //     $data['password']=MD5($request->password);
    //     $user=DB::table('employee_information')->insertGetId($data);

    //     return Redirect::to('/login')->with('Success','Account has been created.');
    // }

    // public function login_form_action(Request $request)
    // {
    //     $login=$request->login;
    //     $password=MD5($request->password);

    //     $result=DB::table('user_login_information')
    //     ->Where('email', $login)
    //     ->orWhere('contact_number', $login)
    //     ->where('password', $password)
    //     ->first();

    //     if($result){
    //         Session::put('id',$result->id);
    //         return Redirect::to('/dashboard');
    //     }
    //     else{
    //         return redirect('/login')->with('flash_message_error','Email Or Password Not Valid');

    //     }
    // }
    // public function login_form_action(Request $request)
    // {
    //     $login=$request->login;
    //     $password=MD5($request->password);

    //     $result=DB::table('employee_information')
    //     ->Where('emp_email', $login)
    //     ->orWhere('emp_phone', $login)
    //     ->where('password', $password)
    //     ->first();

    //     if($result){
    //         Session::put('id',$result->id);
    //         Session::put('emp_id',$result->emp_id);
    //         return Redirect::to('/empDashboard');
    //     }
    //     else{
    //         return redirect('/login')->with('flash_message_error','Email Or Password Not Valid');

    //     }
    // }

    // public function user_dashboard()
    // {
    //     $id = Session::get('id');
    //     $userinfo = DB::table('user_login_information')
    //     ->where(['id'=>$id])->first();
    //     return view('/userDashboard')->with(compact('userinfo'));
    // }
    // public function employee_dashboard()
    // {
    //     $id = Session::get('id');
    //     $emp_id=Session::get('emp_id');

    //     $empinfo = DB::table('employee_information')
    //     ->where(['id'=>$id])->first();
    //     $data= DB::table('user_login_information')
    //     ->where(['employee_id'=>$emp_id])->get();

    //     // return $userinfo;
    //     return view('/employeeDashboard',['data'=>$data])->with(compact('empinfo'));
    // }

    // public function employee_user_registration()
    // {
    //     $id = Session::get('id');
    //     $emp_id=Session::get('emp_id');

    //     $empinfo = DB::table('employee_information')
    //     ->where(['id'=>$id])->first();
    //     return view('/newUserRegistration')->with(compact('empinfo'));
    // }
    // public function change_password()
    // {
    //     return view('employeeChangePassword');
    // }
    // public function password_form_action(Request $request)
    // {
    //     $email=$request->email;
    //     $password=MD5($request->password);
    //     $con_password=$request->con_password;
    //     $con_password=MD5($request->con_password);



    //     if($password == $con_password)
    //     {

    //         DB::update('update employee_information set password = ? where emp_email = ?',[$password,$email]);
    //         return Redirect::to('/login');

    //     }
    //     else
    //     {
    //         return Redirect::to('/changePassword');

    //     }


    // }
    // public function employee_edit_profile()
    // {
    //     $id = Session::get('id');
    //     $emp_id=Session::get('emp_id');

    //     return view('UserPanel.user_profile');
    // }


}
