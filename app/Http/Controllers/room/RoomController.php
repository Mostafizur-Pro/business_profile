<?php

namespace App\Http\Controllers\room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\user_post;
use Session;

class RoomController extends Controller
{

    public function room_page()
    {
       
        $categoriesJson = file_get_contents(storage_path('categories.json'));
        $categoriesList = json_decode($categoriesJson, true);

        $locationsJson = file_get_contents(storage_path('location.json'));
        $locationsList = json_decode($locationsJson, true);


        $division = DB::table('division')->get();
        $area = DB::table('area')->get();


        return view('room/room', compact('categoriesList', 'locationsList', 'division'));
    }


    // public function room_division($division)
    // {
    //     if ($division) { // Ensure it's an AJAX request
    //         dd($division); // Check the data received
    //     }

      
        
    // }





    public function hallRoomPost(Request $request)

    {
        $post = array();
        $post['post'] = $request->post;
        $post['user_id'] = Session::get('userId');
        $post['role'] = 'pending';

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->move('images/post', uniqid() . '.' . $request->file('image')->extension());
            // The second parameter of storeAs is the file name; here, I used uniqid() to generate a unique filename
            $post['image'] = 'images/post/' . basename($imagePath);
        }

        $post['created_at'] = now();
        $post['updated_at'] = now();

        $contact = DB::table('user_post')->insertGetId($post);
    }
}
