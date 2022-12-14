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

Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/users', 'App\Http\Controllers\IndexController@userList');

Route::get('/users/{language}', 'App\Http\Controllers\IndexController@targetuserList');

Route::get('/meetings', 'App\Http\Controllers\IndexController@meetupList');

