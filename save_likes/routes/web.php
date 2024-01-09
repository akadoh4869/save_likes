<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
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

//navページ
//投稿一覧
Route::get('/timeline','App\Http\Controllers\PostController@timeline')->name('post.timeline');
//新規投稿ページ.投稿保存
Route::get('/create','App\Http\Controllers\PostController@create')->name('post.create');
Route::post('/timeline','App\Http\Controllers\PostController@store')->name('post.store');
//プロフィールページ
Route::get('/user/show/{id}','App\Http\Controllers\UserController@show')->name('show');
//検索ページ
route::get('/search','App\Http\Controllers\UserController@search')->name('user.search');
//メッセージページ
route::get('/message/select','App\Http\Controllers\MessageController@select')->name('message.select');
//いいねページ
route::get('/post/likes','App\Http\Controllers\LikeController@index')->name('post.likes');

route::get('/post/detail/{id}','App\Http\Controllers\PostController@detail')->name('post.detail');
// route::get('/post/list/{id}','App\Http\Controllers\PostController@addlist')->name('post.list');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
