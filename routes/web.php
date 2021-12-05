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

Route::get('/', function () {
    return view('forladies.index');
});

Route::get('forladies', 'App\Http\Controllers\ForladiesController@show');

Route::get('register', 'App\Http\Controllers\RegisterController@show');
Route::post('register', 'App\Http\Controllers\RegisterController@store')->name("newuser");

Route::get('login', 'App\Http\Controllers\LoginController@show');
Route::post('login', 'App\Http\Controllers\LoginController@store')->name("mypage");