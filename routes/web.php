<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Auth::routes();


Route::resource('venue/request-for-band', 'App\Http\Controllers\RequestForBandController');

Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');

Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');

Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');
Route::resource('admin/posts', 'App\\Http\\Controllers\\Admin\PostsController');