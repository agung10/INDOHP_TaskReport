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
    return redirect()->route("home");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(["prefix" => "app", "middleware" => "auth"], function(){
    Route::resource('/profile', 'ProfileController');
    Route::resource('/activities', 'ActivityController');
    Route::resource('/cards', 'CardController');
    Route::resource('/tasks', 'TaskController');
});
