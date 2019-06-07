<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{
    public function add(Request $request)
    {
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
            $region['name'] = $request->input('id', '');
            $region['slug'] = $request->input('hash', '');

            // validation
            $valid = true;

            if (!$region['name']) {
                $messages[] = 'Please fill in the name';
                $valid = false;
            }

            // saving
            if ($valid) {

                // save the data
                if ($id) {

                    DB::update("
                        UPDATE `region`
                        SET `name` = ?,
                            `slug` = ?
                        WHERE `id` = ?
                    ", [
                        $region['name'],
                        $region['slug'],
                        $id
                    ]);

                } else {

                    DB::insert("
                        INSERT
                        INTO `region`
                        (`name`, `slug`)
                        VALUES
                        (?, ?)
                    ", [
                        $region['name'],
                        $region['slug']
                    ]);

                    $id = DB::getPDO()->lastInsertId();
                }

                return redirect('/regions/edit?id='.$id);
            }
        }


    }
}
