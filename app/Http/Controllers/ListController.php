<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListController extends Controller
{
    public function list()
    {
        $query = "SELECT *
                FROM `songs`";

        $songs = DB::select($query);

        $songs_view = view('songs/list',[
            'songs' => $songs
        ]);

        return view('html_wrapper', [
            'content' => $songs_view
        ]);
    }
}
