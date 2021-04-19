<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PageController@moviepage');
Route::get('/homepage', 'App\Http\Controllers\PageController@homepage');
Route::get('/category', 'App\Http\Controllers\PageController@category');
Route::get('/review', 'App\Http\Controllers\PageController@review');
Route::get('/add_review', 'App\Http\Controllers\PageController@add_review');

Route::resource('posts','App\Http\Controllers\PostsController');

