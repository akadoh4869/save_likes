<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

Route::get('/timeline','App\Http\Controllers\PostController@timeline')->name('post.timeline');

Route::get('/create','App\Http\Controllers\PostController@create')->name('post.create');

Route::post('/timeline','App\Http\Controllers\PostController@store')->name('post.store');

Route::get('/user/show/{id}','App\Http\Controllers\UserController@show')->name('show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
