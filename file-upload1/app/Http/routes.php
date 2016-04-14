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

Route::get('/', function () {
    return view('announce.index');
});

//------------Auth--------------------------------------//

Route::auth();

Route::get('/auth/home', 'HomeController@index');
Route::get('/auth/edit', 'HomeController@edit');

Route::get('index', function(){
	return view('index');
})->middleware('auth');

//----------------------Announce---------------------------//

Route::get('announce', function(){
	return view('announce.index');
});

Route::get('announce/create', 'ImageController@upload');
Route::post('announce/create', 'ImageController@store');
Route::get('announce/view/{id}', 'ImageController@show');
Route::get('announce/edit/{id}', 'ImageController@edit');


//-------------------Image------------------------------//

Route::get('image', function(){
	return view('image.index');
});

Route::get('image/create', 'ImageController@upload');
Route::post('image/create', 'ImageController@store');
Route::post('image/index', 'ImageController@main');
Route::get('image/show/{id}', 'ImageController@show');
Route::get('image/edit/{id}', 'ImageController@edit');
