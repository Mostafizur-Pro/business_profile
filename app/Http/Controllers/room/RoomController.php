<?php

namespace App\Http\Controllers\room;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $areas = DB::table('area')->get();

        $posts = DB::table('user_post')
            ->orderBy('created_at', 'desc')
            ->get();

        // Collect user IDs from posts
        $userIds = $posts->pluck('user_id')->unique();

        // Fetch user details for the collected user IDs
        $users = [];
        foreach ($userIds as $userId) {
            $user = User::find($userId);
            if ($user) {
                $users[$userId] = $user;
            }
        }



        // dd($users);


        return view('room/room', compact('categoriesList', 'locationsList', 'division', 'areas', 'posts', 'users'));
    }



    public function hallRoomPost(Request $request)
    {
        // dd($request);

        $post = array();
        $post['post'] = $request->post;
        $post['division'] = $request->division;
        $post['district'] = $request->district;
        if ($request->has('area')) {
            $post['area'] = $request->area;
        }
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
        if ($contact) {
            return redirect('/room');
        }
    }

    public function update_hallRoomPost(Request $request, $id)
    {
        // dd($request);
        $updateData = [
            'post' => $request->input('post'),
            'division' => $request->input('division'),
            'district' => $request->input('district'),
            'area' => $request->input('area'),
            'role' => 'pending',

        ];

        // dd($updateData);
        // Perform the update
        $result = DB::table('user_post')
            ->where('id', $id)
            ->update($updateData);

        // dd($result);
        if ($result) {
            return redirect("/room")->with('Success', 'Profile updated Successfully');
        } else {
            return redirect("/room")->with('Fail', 'Profile update failed');
        }
    }
}
