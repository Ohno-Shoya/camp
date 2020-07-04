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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'ItemController@index')->middleware('auth');
});

// メイン画面処理
Route::get('/', 'ItemController@index');

// コメント画面処理
Route::get('comment/create', 'CommentController@add')->middleware('auth');
Route::post('comment/create', 'CommentController@create')->middleware('auth');
Route::get('comment/show', 'CommentController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


