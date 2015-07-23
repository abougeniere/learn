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


get('users', 'UsersController@getInfos');

post('users', 'UsersController@postInfos');

Route::get('/', function () {

    $url = url('foo');
    \Debugbar::error($url);
    return view('welcome');
});

Route::get('/test', function () {
    return view('test.welcome');
});


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});