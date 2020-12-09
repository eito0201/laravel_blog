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

/**
 * 投稿機能のルーティング
 */
// 投稿一覧画面
Route::get('/', 'PostsController@index');

// 投稿詳細画面
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');

// 新規投稿画面
Route::get('/posts/create', 'PostsController@create');

// 投稿内容登録
Route::post('/posts', 'PostsController@store');

// 投稿編集画面
Route::get('/posts/edit/{post}', 'PostsController@edit');

// 投稿内容更新
Route::patch('/posts/{post}', 'PostsController@update');

// 投稿内容削除
Route::delete('/posts/{post}', 'PostsController@destroy');

/**
 * コメント機能のルーティング
 */
// コメント登録
Route::post('/posts/{post}/comments', 'CommentsController@store');
