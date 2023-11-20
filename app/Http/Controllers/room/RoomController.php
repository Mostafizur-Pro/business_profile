<?php

namespace App\Http\Controllers\room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    

    public function room_page()
    {

        $categoriesJson = file_get_contents(storage_path('categories.json'));
        $categoriesList = json_decode($categoriesJson, true);
        // dd($categoriesList);


        // return view('room/room', ['categoriesList' => $categoriesList]);
        return view('room/room', compact('categoriesList'));
    }

}
