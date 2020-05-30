<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category','CategoryController@index');
Route::post('/category/store','CategoryController@store');
Route::get('category/delete/{id}','CategoryController@delete');
Route::get('/category/edit/{id}','CategoryController@editCategory');
Route::post('/category/update','CategoryController@updateCategory');

Route::post('/post/update','PostController@update');
Route::post('/post/store','PostController@store');
Route::get('/post','PostController@index');
Route::get('/post/edit/{id}','PostController@edit');
Route::get('/post/delete/{id}','PostController@delete');


Route::get('/categores','FrontEndController@categoryData');
