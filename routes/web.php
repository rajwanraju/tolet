<?php
use App\post;

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

/*
Route::get('/map', function () {
    $subAreas=post::pluck('SubArea','SubArea');

    return view('laramap',compact('subAreas'));
});
*/

Route::get('/map/{id}','PostController@getLocation');

Route::get('/addMap','PostController@createLocationView');



Route::get('get-ip-details', function () {
	$ip = '66.102.0.0';
    $data = \Location::get($ip);
    dd($data);
});

Route::post('/search','SearchController@search');
//Route::post('/search','SearchController@searchPost');

Route::get('/','HomeController@index');
Route::get('/post/add', 'PostController@index');
Route::post('/post/save', 'PostController@storePost');
Route::post('place/add','PostController@postDetails');



Route::get('/flat-details/{id}','PostController@postDetails');
Route::get('/category-view/{id}','HomeController@category');

Route::get('/flat-details/{id}','HomeController@flatDetails');
Route::get('/type-view/{id}','HomeController@type');


