<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{
    public function add(Request $request)
    {
        $messages=[];
        $id = $request->input('id', null);
        if ($id) {
            $region = (array)DB::selectOne("
                SELECT *
                FROM `songs`
                WHERE `id` = ?
            ", [$id]);

        } else {

            $region = [
                'id' => null,
                'hash' => null,
                'author' => null,
                'name' => null,
                'description' => null,
                'datetime' => null
            ];
        }
        if ($request->method() == 'POST') {
            // the form was submitted

            // update data from request data
            $region['id'] = $request->input('id', '');
            $region['hash'] = $request->input('hash', '');
            $region['author'] = $request->input('author', '');
            $region['name'] = $request->input('name', '');
            $region['description'] = $request->input('description', '');
            // validation
            $valid = true;

            if (!$region['name']) {
                $messages[] = 'Please fill in the name';
                $valid = false;
            }

            if ($valid) {
                if ($id) {

                    DB::update("
                        UPDATE `songs`
                        SET `hash` = ?,
                            `author` = ?,
                            `name` = ?,
                            `description` = ?
                        WHERE `id` = ?
                    ", [
                        $region['hash'],
                        $region['author'],
                        $region['name'],
                        $region['description'],
                        $id
                    ]);

                } else {

                    DB::insert("
                        INSERT
                        INTO `songs`
                        (`hash`,
                        `author`,
                        `name`,
                        `description`,
                        `datetime`
                         )
                        VALUES
                        (?, ?, ?, ?, ?)
                    ", [
                        $region['hash'],
                        $region['author'],
                        $region['name'],
                        $region['description'],
                        date("Y-m-d H:i:s")
                    ]);

                    $id = DB::getPDO()->lastInsertId();
                }

                return redirect('/songs/add?id='.$id);
            }
        }

        $delete=view('songs/delete',[
            'song' => $region
        ]);
        $form = view('songs/add', [
            'region' => $region,
            'delete'=>$delete
        ]);        
        return view('html_wrapper',[
            'content'=>$form
        ]);
    }

    public function play(Request $request){
        
        $id = $request->input('id', null);
        $song=[];
        if ($id) {
            $song = (array)DB::selectOne("
                SELECT *
                FROM `songs`
                WHERE `id` = ?
            ", [$id]);

        }else{}
        $play = view('songs/play', [
            'song' => $song
        ]);
        return view('html_wrapper',[
            'content'=>$play
        ]);
    }

    public function delete(Request $request){
        $id = $request->input('id', null);
        if ($id) {
            $song = (array)DB::delete("
                DELETE
                FROM `songs`
                WHERE `id` = ?
            ", [$id]);}
        
        return redirect('/songs/add');
    }
}
