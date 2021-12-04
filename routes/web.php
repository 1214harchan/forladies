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
    return view('welcome');
});

Route::get('forladies', 'App\Http\Controllers\ForladiesController@top');

// Route::get('/edit', 'SupplierController@edit')->name("edit");

Route::get('register', 'App\Http\Controllers\RegisterController@register');
Route::post('register', 'App\Http\Controllers\RegisterController@newuser')->name("newuser");

Route::get('login', 'App\Http\Controllers\LoginController@login');
Route::post('login', 'App\Http\Controllers\LoginController@mypage')->name("mypage");