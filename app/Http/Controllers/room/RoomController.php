<?php

namespace App\Http\Controllers\room;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class RoomController extends Controller
{

    public function room_page()
    {

        $division = DB::table('division')->get();
        $areas = DB::table('area')->get();
        $categories = DB::table('categories_list')->get();

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



        // dd($categories);


        return view('room/room', compact('division', 'areas', 'posts', 'users', 'categories'));
    }
    


    // Post
    public function hallRoomPost(Request $request)
    {
        // dd($request);

        $post = array();
        $post['post'] = $request->post;
        $post['category'] = $request->category;
        $post['subcategories'] = $request->subcategories;
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

        $post['created_at'] = Carbon::now()->setTimezone('Asia/Dhaka');
        $post['updated_at'] = now();

        $contact = DB::table('user_post')->insertGetId($post);

        if ($contact) {
            return redirect('/room');
        }
    }

    // update
    public function update_hallRoomPost(Request $request, $id)
    {
        // dd($request);
        $updateData = [
            'post' => $request->input('post'),
            'category' => $request->input('category'),
            'subcategories' => $request->input('subcategories'),
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
