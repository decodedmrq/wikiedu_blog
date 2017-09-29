<?php

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
Route::get('home', function() {
    return view('home');
});

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function() {
	Route::resource('/post', 'PostController');
	Route::resource('/user', 'UserController');
	Route::get('overview', function() {
		return view('admin.overview');
	})->name('overview');
});


Auth::routes();

Route::get('/', function(){
	return view('welcome');
});
