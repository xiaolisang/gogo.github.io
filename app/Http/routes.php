<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index' );

Route::get('index/index', [ 'as' => 'index/index', 'uses' => 'IndexController@index']);

Route::get('forum/index',[ 'as'=>'forum/index','uses'=>'ForumController@index']);
Route::get('diary/index', [ 'as'=>'diary/index','uses'=>'DiaryController@index']);
Route::get('way/index', [ 'as'=>'way/index','uses'=>'WayController@index']);
