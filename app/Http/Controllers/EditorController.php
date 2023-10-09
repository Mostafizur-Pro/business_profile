<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
 use Session;

class EditorController extends Controller
{
    public function editor_dashboard()
    {
        $email = Session::get('editor_email');
        $result=DB::table('editor_information')
        ->where('editor_email', $email)  
        ->first();

        if($result)
        {
            $data= DB::table('user_login_information')->get();
            return view('editor.editorDashboard',['data'=>$data]);
        }
        else
        {
            return redirect('/admin');
        }

        // if ($id == 1){
        //     // $data= DB::table('user_login_information')->get();
        //     // return view('editor.editorDashboard',['data'=>$data]);
        //     echo "$";

        // }
        // else{
        //     return redirect('/admin');

        // }
       
        // echo "$id";

    }

    public function edit($id)
    {

        $email = Session::get('editor_email');
        $result=DB::table('editor_information')
        ->where('editor_email', $email)  
        ->first();

        if($result)
        {
            $edit=DB::table('user_login_information')
            ->Where('id', $id)
            ->first();
        return view('editor.editor_edit_profile')->with(compact('edit'));
        }
        else
        {
            return redirect('/admin');
        }
    }

    public function update_request(Request $request,$id)
    {
  $update= DB::table('user_login_information')
  ->where('id', $id)
  ->first();

  if($update)
  {
        $data=array();
        $data['organization_name']=$request->organization_name;
        $data['owner_name']=$request->owner_name;
        $data['contact_number']=$request->contact_number;
        $data['business_type']= $request->business_type;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['user_id']=$id;

        $user=DB::table('editor_request_userinfo')->insertGetId($data);
    return redirect('/editor_dashboard');

    
  }
  else{
return redirect ('/editor_edit/$id');

  }
    }

    public function package_list()
    {
        $email = Session::get('editor_email');
        $result=DB::table('editor_information')
        ->where('editor_email', $email)  
        ->first();

        if($result)
        {
            $id = Session::get('id');
        $data= DB::table('package_list')->get();

        return view('editor.editor_packageList',['data'=>$data]);

        }
        else{
            return redirect('/admin');

        }   
    }

    public function package_add()
    {
        $email = Session::get('editor_email');
        $result=DB::table('editor_information')
        ->where('editor_email', $email)  
        ->first();

        if($result)
        {
            

        return view('editor.editor_create_package');

        }
        else{
            return redirect('/admin');

        } 

    }
    public function editor_create_package(Request $request)
    {
        $data=array();
        $data['package_name']=$request->package_name;
        $data['package_value']=$request->package_value;
        $data['image_ad_count']=$request->image_ad_count;
        $data['video_ad_count']= $request->video_ad_count;
        $create=DB::table('package_list')->insertGetId($data);

        return redirect()->back();
    }

    public function editor_delete_package($id)
    {
        $email = Session::get('editor_email');
        $result=DB::table('editor_information')
        ->where('editor_email', $email)  
        ->first();

        if($result)
        {   
            $delete= DB::table('package_list')
            ->where('id', $id)
            ->first();
    
            if($delete)
            {
                DB::delete('delete from package_list where id= ?',[$id]);
                return redirect('/editor_packageList');
    
            }

        }
        else{
            return redirect('/admin');

        }
    }

}

  

