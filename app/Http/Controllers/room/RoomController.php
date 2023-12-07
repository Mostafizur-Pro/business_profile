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

        $locationsJson = file_get_contents(storage_path('location.json'));
        $locationsList = json_decode($locationsJson, true);

        // dd($locationsList);

        return view('room/room', compact('categoriesList', 'locationsList'));
    }




}
