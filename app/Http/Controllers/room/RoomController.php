<?php

namespace App\Http\Controllers\room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\user_post;

class RoomController extends Controller
{
    

    public function room_page()
    {

        $categoriesJson = file_get_contents(storage_path('categories.json'));
        $categoriesList = json_decode($categoriesJson, true);

        $locationsJson = file_get_contents(storage_path('location.json'));
        $locationsList = json_decode($locationsJson, true);
        // dd($categoriesList);


        // return view('room/room', ['categoriesList' => $categoriesList]);
        return view('room/room', compact('categoriesList', 'locationsList'));
    }


   public function hallRoomPost(Request $request)

 {
//     $rafi=array();
// $rafi['post']=$request->post;
// $rafi['image']=$request->image;
// $rafi['created_at']=now();
//   $rafi['updated_at']=now();
// // dd($ifra);
  

// $contact=DB::table('user_post')->insertGetId($rafi);




$rafi = array();
$rafi['post'] = $request->post;

if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->storeAs('public/post', uniqid().'.'.$request->file('image')->extension());
    // The second parameter of storeAs is the file name; here, I used uniqid() to generate a unique filename
    $rafi['image'] = 'storage/post/' . basename($imagePath);
}

$rafi['created_at'] = now();
$rafi['updated_at'] = now();

$contact = DB::table('user_post')->insertGetId($rafi);


}



   }

