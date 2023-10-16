<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
// use App\Http\Controllers\Hash;

class HomeController extends Controller
{



    public function home_page()
    {
        return view('homepage');
    }
    public function about_page()
    {
        return view('about');
    }


    // public function registration_page()
    // {
    //     return view('registration');
    // }

    // public function login_page()
    // {
    //     return view('login');
    // }
    // public function package()
    // {
    //     $package=DB::table('package_list')->get();
    //     return view('UserPanel.package')->with(compact('package'));
    // }
    // public function signup()
    // {
    //     return view('employeeRegistration');
    // }
    // public function user_profile()
    // {
    //     return view('UserPanel.user_profile');
    // }
    // public function client_list()
    // {
    //     $data= DB::table('user_login_information')->get();
    //     // return view('clientList');
    //     return view('clientList',['data'=>$data]);
    // }

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
