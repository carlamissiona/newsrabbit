<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
/*  
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::resource('/sources', 'SourcesController');
Route::get('/api/news', 'NewsController@index');
Route::post('/api/sources', 'SourcesController@index');
Route::get('/api/category', 'CategoryController@index');
Route::post('/api/news/search', 'NewsController@search');
Route::get('/home/getfeeds', 'HomeController@getfeeds');
Route::get('/app/sendsms', 'HomeController@sendsms');


Route::get('/home', 'HomeController@index'); 
Route::group(['middleware' => 'web'], function () {
    Route::auth();

     
     
});
