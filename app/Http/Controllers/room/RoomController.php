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

    public function room_page(Request $request)
    {
        $division = DB::table('division')->get();
        $areas = DB::table('area')->get();
        $categories = DB::table('categories_list')->get();

        $search = $request->input('search');
        $location = $request->input('location');
        $subcategories = $request->input('subcategory');

        $posts = DB::table('user_post')
            ->orderBy('created_at', 'desc');

        if ($subcategories) {
            $posts->where('subcategories', 'LIKE', $subcategories . '%');
        } elseif ($location) {
            $posts->where('area', 'LIKE', $location . '%');
        } else {
            $posts->where(function ($query) use ($search) {
                $query->where('post', 'LIKE', '%' . $search . '%')
                    ->orWhere('category', 'LIKE', '%' . $search . '%')
                    ->orWhere('subcategories', 'LIKE', '%' . $search . '%')
                    ->orWhere('division', 'LIKE', '%' . $search . '%')
                    ->orWhere('district', 'LIKE', '%' . $search . '%')
                    ->orWhere('area', 'LIKE', '%' . $search . '%');
            });
        }


        $allPosts = $posts->get();

        // dd($allPosts);
        $userIds = $posts->pluck('user_id')->unique();

        $users = [];
        foreach ($userIds as $userId) {
            $user = User::find($userId);
            if ($user) {
                $users[$userId] = $user;
            }
        }

        return view('room/room', compact('division', 'areas', 'allPosts', 'users', 'categories'));
    }


    public function room_page1(Request $request)
    {



        $url = $request->getRequestUri();
        $parts = explode('/', $url); // Split the string by '/'
        $id = end($parts);
        
        
        $userData = DB::table('user_info')->find($id);
        dd($userData);
        return view('room/profile', compact('userData'));
    }



    // Post
    public function hallRoomPost(Request $request)
    {
        // dd($request);       

        $post = array();
        $post['title'] = $request->title;
        $post['post'] = $request->post;
        $post['category'] = $request->category;
        $post['subcategories'] = $request->subcategories;
        // $post['subcategories'] = $request->subcategories;
        $post['division'] = $request->division;
        $post['district'] = $request->district;
        if ($request->has('area')) {
            $post['area'] = $request->area;
        }
        $post['user_id'] = Session::get('userId');
        $post['role'] = 'pending';

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move('images/post', uniqid() . '.' . $request->file('image')->extension());
            $post['image'] = 'images/post/' . basename($imagePath);
        }

        // $post['created_at'] = now();
        // $post['updated_at'] = now();
        // $post['created_at'] = Carbon::now()->setTimezone('Asia/Dhaka');
        // $post['updated_at'] = Carbon::now()->setTimezone('Asia/Dhaka');

        $currentDateTime = Carbon::now()->setTimezone('Asia/Dhaka');
        $post['created_at'] = $currentDateTime->toDateTimeString();
        $post['updated_at'] = $currentDateTime->toDateTimeString();
        // dd($post);

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
            'title' => $request->input('title'),
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
    public function delete_hallRoomPost(Request $request, $id)
    {
        $post = DB::table('user_post')->where('id', $id)->first();

        if ($post !== null) {
            // Delete the record
            DB::table('user_post')->where('id', $id)->delete();
            // Handle success or redirect
            return redirect('/room')->with('Success', 'Post deleted successfully');
        } else {
            return redirect('/room')->with('Fail', 'Post delete failed');
            // Handle case where the record with the given ID is not found
        }
    }
}
