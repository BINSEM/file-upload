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

//----------------------Announce---------------------------//

Route::get('/announce/index', 'AnnounceController@index');
Route::get('/announce/show/{id}', 'AnnounceController@show');
Route::get('/announce/edit/{id}', 'AnnounceController@edit');
Route::put('/announce/edit/{id}', 'AnnounceController@update');
Route::post('/announce/create', 'AnnounceController@store');
Route::get('/announce/create', 'AnnounceController@create');
Route::delete('/announce/destroy/{id}', 'AnnounceController@destroy');

//------------Auth--------------------------------------//

Route::get('/', function () {
    return view('auth/home');
});

Route::auth();

Route::get('auth/index', 'HomeController@index');
Route::get('auth/show/{id}', 'HomeController@show');
Route::get('auth/edit/{id}', 'HomeController@edit');
Route::put('auth/edit/{id}', 'HomeController@update');
Route::delete('auth/destroy', 'HomeController@destroy');

Route::get('index', function(){
	return view('index');
})->middleware('auth');


//-------------------Image------------------------------//

Route::get('image', function(){
	return view('image.index');
});

Route::get('image/create', 'ImageController@upload');
Route::post('image/create', 'ImageController@store');
Route::post('image/index', 'ImageController@main');
Route::get('image/show/{id}', 'ImageController@show');
Route::get('image/edit/{id}', 'ImageController@edit');
