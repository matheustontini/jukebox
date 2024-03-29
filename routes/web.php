<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/songs/add', 'SongController@add');
Route::get('/songs/list', 'ListController@list');
Route::post('/songs/add', 'SongController@add');
Route::get('/songs/play', 'SongController@play');
Route::get('/songs/delete', 'SongController@delete');
Route::post('/songs/delete', 'SongController@delete');
